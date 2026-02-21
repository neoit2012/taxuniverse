# GST Registration Analysis (IndiaFilings Reference)

## 1. Input Requirements
### Initial Lead Form
- Full Name
- Email Address
- Mobile Number
- City/State

### Business Details
- Legal Name of Business
- Trade Name (if different)
- Constitution of Business (Sole Proprietorship, Partnership, Private Limited, etc.)
- Primary Nature of Business (Manufacturing, Retail, Service, Wholesale, Export)
- Date of Commencement of Business

### Address Data
- Address of Principal Place of Business
- PIN Code
- District/State
- Latitude/Longitude (Optional but often required for geocoding)

### Bank Details
- Bank Account Number
- IFSC Code
- Branch Name

## 2. Document Checklist
### Identity & Address Proof (Promoters)
- **PAN Card** (Mandatory for all)
- **Aadhaar Card** (Mandatory for Proprietor/Partners/Directors)
- **Photograph** (Passport size)

### Business Proof
- **Partnership Deed** (for Partnership Firms)
- **Certificate of Incorporation** (for Companies/LLPs)

### Address Proof (Place of Business)
- **Owned:** Latest Property Tax Receipt or Electricity Bill.
- **Rented:** Rent/Lease Agreement + Electricity Bill + NOC from Owner.

### Financial Proof
- **Bank Proof:** Cancelled Cheque or First page of Bank Statement/Passbook.

## 3. User Flow
1.  **Lead Capture:** User enters basic details to view pricing/start.
2.  **Order Creation:** User pays professional fees.
3.  **Data Collection:** User fills a detailed dynamic form (Livewire Wizard).
4.  **Document Upload:** User uploads documents based on the selected Constitution.
5.  **Verification:** Admin verifies documents and details.
6.  **Application Filing:** Admin files application on GST Portal.
7.  **ARN Generation:** ARN is shared with the user for tracking.
8.  **Completion:** GST Certificate (Form REG-06) is uploaded to the portal.
