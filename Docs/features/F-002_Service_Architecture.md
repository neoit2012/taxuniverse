# F-002: Service Architecture Blueprint

## 1. Overview
This document outlines the technical architecture for implementing the service workflows (GST, Pvt Ltd, etc.) within the TaxiUniverse Laravel application. We will utilize **Livewire** for dynamic, multi-step forms and **Spatie Media Library** for secure document management.

## 2. Database Schema Mapping
The core schema (`services`, `orders`, `documents`) is designed to be flexible. We will extend it using a JSON-based approach for service-specific data to avoid table bloat.

### 2.1. Services Table Extension
- `features` (JSON): Stores service specific configuration (e.g., required input fields, document checklist).

### 2.2. Orders Table Extension
- `data` (JSON): Stores the user-submitted form data (e.g., business name, director details). This allows us to have different form structures for different services without altering the schema.

## 3. Implementation Strategy

### 3.1. Dynamic Form Engine (Livewire)
We will create a generic `ServiceForm` Livewire component that renders fields based on a configuration file or database entry.

**Component Structure:**
- `app/Http/Livewire/ServiceForm.php`: Handles validation and submission.
- `resources/views/livewire/service-form.blade.php`: Renders the form steps.

**Workflow:**
1.  **Step 1: Input Details** - Render fields defined in the service config.
2.  **Step 2: Document Upload** - Render upload zones for required documents.
3.  **Step 3: Review & Pay** - Show summary and integrate generic payment gateway.

### 3.2. Secure Document Handling (Spatie Media Library)
We will use `spatie/laravel-medialibrary` to associate files with the `Order` model.

**Configuration:**
- **Disk:** `private` (local storage, not accessible via public URL).
- **Collections:**
    - `kyc_documents`: Pan cards, Aadhaar, etc.
    - `business_proof`: Partnership deeds, incorporation certs.
- **Access Control:** A `MediaController` will enforce policy checks (`view` policy on `Order`) before streaming the file response.

## 4. Specific Workflows
### A. GST Registration
- **Form Fields:** `legal_name`, `trade_name`, `pan_number`, `composition_scheme` (bool).
- **Documents:** `pan_card`, `aadhaar_card`, `proof_of_business`, `bank_proof`.

### B. Private Limited Registration
- **Form Fields:** `company_name_1`, `company_name_2`, `authorized_capital`, `paid_up_capital`.
- **Repeater Field:** `directors` (Name, Email, Phone, DIN).
- **Documents:** `director_pan`, `director_id_proof`, `office_utility_bill`, `noc`.

## 5. Security & Validation
- **Validation:** All inputs validated against standard regex (PAN, GSTIN, Aadhaar).
- **File Type:** Strict MIME checking (PDF/JPEG/PNG only).
- **Size Limit:** Max 5MB per file.
- **Sanitization:** All uploads renamed to random hashes.

## 6. Next Steps
1.  Install `livewire/livewire` and `spatie/laravel-medialibrary`.
2.  Create `ServiceConfig` files for GST and Pvt Ltd.
3.  Build the `ServiceForm` Liwewire component.
