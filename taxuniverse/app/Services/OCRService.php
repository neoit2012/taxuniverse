<?php

namespace App\Services;

use Illuminate\Support\Facades\Log;
use Symfony\Component\Process\Process;
use Symfony\Component\Process\Exception\ProcessFailedException;

class OCRService
{
    public function extract($imagePath)
    {
        $pythonPath = base_path('ocr_venv/Scripts/python');
        $scriptPath = base_path('ocr_extract.py');

        $process = new Process([$pythonPath, $scriptPath, $imagePath]);
        
        try {
            $process->mustRun();
            $output = $process->getOutput();
            return json_decode($output, true);
        } catch (ProcessFailedException $exception) {
            Log::error("OCR Extraction failed: " . $exception->getMessage());
            return ['error' => 'Failed to process image'];
        }
    }
}
