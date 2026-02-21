<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DocumentController extends Controller
{
    public function store(Request $request, \App\Models\Order $order)
    {
        $this->authorize('view', $order);

        $request->validate([
            'document' => 'required|file|mimes:pdf,jpg,jpeg,png|max:10240', // 10MB max
            'type' => 'required|string',
        ]);

        $file = $request->file('document');
        $originalName = $file->getClientOriginalName();
        $mimeType = $file->getMimeType();
        
        // Secure storage in 'local' disk (storage/app/documents) - NOT PUBLIC
        $path = $file->store('documents');

        $document = $order->documents()->create([
            'user_id' => auth()->id(),
            'type' => $request->type,
            'path' => $path,
            'mime_type' => $mimeType,
            'original_name' => $originalName,
        ]);

        // OCR Processing for identity documents
        if (in_array($request->type, ['PAN Card', 'Aadhar Card'])) {
            try {
                $ocrService = new \App\Services\OCRService();
                $fullPath = storage_path('app/' . $path);
                $extractedData = $ocrService->extract($fullPath);
                
                // For now, we'll just log it. In a real app, you'd save it to a profiles/verifications table.
                \Illuminate\Support\Facades\Log::info("OCR Extracted Data for Order #{$order->id}: ", $extractedData);
            } catch (\Exception $e) {
                \Illuminate\Support\Facades\Log::warning("OCR failed for Document #{$document->id}: " . $e->getMessage());
            }
        }

        return back()->with('success', 'Document uploaded successfully. Our AI is processing the information.');
    }

    public function download(\App\Models\Document $document)
    {
        $this->authorize('view', $document->order);
        
        if (!\Illuminate\Support\Facades\Storage::exists($document->path)) {
            abort(404);
        }

        return response()->download(storage_path('app/' . $document->path), $document->original_name);
    }
}
