<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Service;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $services = [
            [
                'name' => 'Private Limited Company Registration',
                'slug' => 'pvt-ltd-registration',
                'description' => 'Fastest way to start a company in India. Includes DSC, DIN, MOA, AOA, PAN & TAN.',
                'price' => 6999.00,
                'icon_url' => 'https://example.com/icons/pvt-ltd.svg',
                'category' => 'Startup',
                'features' => ['DSC (2 Nos)', 'DIN (2 Nos)', 'Name Approval', 'MOA & AOA', 'Certificate of Incorporation', 'PAN & TAN', 'Bank Account Opening Support'],
                'cms_content' => [
                    'hero' => [
                        'title' => 'Register Your Private Limited Company',
                        'subtitle' => 'The most popular legal structure for businesses in India. scalable, limited liability, and funding-ready.',
                        'badge' => 'Most Popular'
                    ],
                    'benefits' => [
                        ['title' => 'Limited Liability', 'desc' => 'Directors are not personally liable for company debts.'],
                        ['title' => 'Fundraising', 'desc' => 'Essential for raising VC/Angel funding.'],
                        ['title' => 'Credibility', 'desc' => 'Higher trust with vendors and customers.'],
                        ['title' => 'Perpetual Succession', 'desc' => 'Company continues even if directors change.']
                    ],
                    'process' => [
                        ['step' => 1, 'title' => 'Document Submission', 'desc' => 'Upload PAN, Aadhaar, and Photos securely.'],
                        ['step' => 2, 'title' => 'DSC & Name Approval', 'desc' => 'We apply for Digital Signatures and Company Name.'],
                        ['step' => 3, 'title' => 'Incorporation Filing', 'desc' => 'We draft MOA/AOA and file SPICe+ forms.'],
                        ['step' => 4, 'title' => 'Get Certificate', 'desc' => 'Receive COI, PAN, and TAN via email.']
                    ],
                    'documents' => ['PAN Card of Directors', 'Aadhaar/Voter ID/Passport', 'Bank Statement/Utility Bill', 'Passport Photo', 'Office Proof (Rent Agreement/NOC)']
                ]
            ],
            [
                'name' => 'Limited Liability Partnership (LLP)',
                'slug' => 'llp-registration',
                'description' => 'Ideal for professional firms. Low compliance cost with limited liability protection.',
                'price' => 4999.00,
                'icon_url' => 'https://example.com/icons/llp.svg',
                'category' => 'Startup',
                'features' => ['DSC (2 Nos)', 'DIN (2 Nos)', 'Name Reservation', 'LLP Agreement Drafting', 'Incorporation Certificate', 'PAN & TAN'],
                'cms_content' => [
                    'hero' => [
                        'title' => 'Register Your LLP',
                        'subtitle' => 'Best suited for service-based businesses like lawyers, architects, and doctors.',
                        'badge' => 'Low Compliance'
                    ],
                    'benefits' => [
                        ['title' => 'Low Cost', 'desc' => 'Cheaper to incorporate and maintain than Pvt Ltd.'],
                        ['title' => 'No Audit', 'desc' => 'Audit not required until turnover exceeds 40 Lakhs.'],
                        ['title' => 'Tax Benefits', 'desc' => 'Exempt from Dividend Distribution Tax (DDT).'],
                        ['title' => 'Flexible Structure', 'desc' => 'Fewer restrictions on partners and operations.']
                    ],
                    'process' => [
                        ['step' => 1, 'title' => 'Document Submission', 'desc' => 'Submit KYC documents of partners.'],
                        ['step' => 2, 'title' => 'DSC & Name Approval', 'desc' => 'Obtain Digital Signatures and reserve name.'],
                        ['step' => 3, 'title' => 'LLP Filing', 'desc' => 'File incorporation forms with ROC.'],
                        ['step' => 4, 'title' => 'Deed Drafting', 'desc' => 'Draft and notarize LLP Agreement.']
                    ],
                    'documents' => ['PAN Card of Partners', 'Aadhaar/Voter ID', 'Address Proof', 'Photo', 'Office Proof']
                ]
            ],
            [
                'name' => 'One Person Company (OPC)',
                'slug' => 'opc-registration',
                'description' => 'Enjoy corporate status with just one owner. Perfect for solo entrepreneurs.',
                'price' => 5999.00,
                'icon_url' => 'https://example.com/icons/opc.svg',
                'category' => 'Startup',
                'features' => ['DSC (1 No)', 'DIN (1 No)', 'Name Approval', 'MOA & AOA', 'Certificate of Incorporation', 'PAN & TAN'],
                'cms_content' => [
                    'hero' => [
                        'title' => 'Register One Person Company',
                        'subtitle' => 'The perfect blend of sole proprietorship control and corporate status.',
                        'badge' => 'Solo Founder'
                    ],
                    'benefits' => [
                        ['title' => 'Wait, Just Me?', 'desc' => 'Yes, only 1 director and shareholder required.'],
                        ['title' => 'Limited Liability', 'desc' => 'Protect your personal assets from business risks.'],
                        ['title' => 'Corporate Identity', 'desc' => 'Better than proprietorship for banking and loans.'],
                        ['title' => 'Easy Conversion', 'desc' => 'Can convert to Pvt Ltd easily when you grow.']
                    ],
                    'process' => [
                        ['step' => 1, 'title' => 'KYC & Nominee', 'desc' => 'Submit your KYC and details of one nominee.'],
                        ['step' => 2, 'title' => 'DSC & Name', 'desc' => 'Get DSC and approve your unique name.'],
                        ['step' => 3, 'title' => 'SPICe+ Filing', 'desc' => 'We file the incorporation documents.'],
                        ['step' => 4, 'title' => 'Business Ready', 'desc' => 'Get your COI, PAN, and TAN.']
                    ],
                    'documents' => ['PAN Card', 'Aadhaar', 'Bank Statement', 'Nominee Consent Form', 'Office Proof']
                ]
            ],
            [
                'name' => 'Partnership Firm',
                'slug' => 'partnership-registration',
                'description' => 'Original way to share business. Simple registration with the Registrar of Firms.',
                'price' => 2999.00,
                'icon_url' => 'https://example.com/icons/partnership.svg',
                'category' => 'Startup',
                'features' => ['Partnership Deed Drafting', 'Deed Registration', 'PAN Card Application', 'Consultation'],
                'cms_content' => [
                    'hero' => [
                        'title' => 'Partnership Firm Registration',
                        'subtitle' => 'The simplest way for two or more people to run a business together.',
                        'badge' => 'Traditional'
                    ],
                    'benefits' => [
                        ['title' => 'Minimal Compliance', 'desc' => 'No annual filing with MCA required.'],
                        ['title' => 'Easy to Start', 'desc' => 'Just a deed and PAN card gets you going.'],
                        ['title' => 'Cost Effective', 'desc' => 'Very low setup and maintenance costs.'],
                        ['title' => 'Shared Responsibility', 'desc' => 'Partners share profits and liabilities.']
                    ],
                    'process' => [
                        ['step' => 1, 'title' => 'Deed Drafting', 'desc' => 'We draft a comprehensive Partnership Deed.'],
                        ['step' => 2, 'title' => 'Execution', 'desc' => 'Partners sign the deed on stamp paper.'],
                        ['step' => 3, 'title' => 'PAN Application', 'desc' => 'Apply for the firm\'s PAN card.'],
                        ['step' => 4, 'title' => 'Registration', 'desc' => 'Optional: Register with Registrar of Firms (ROF).']
                    ],
                    'documents' => ['PAN of Partners', 'Address Proof of Partners', 'Office Address Proof', 'Rent Agreement']
                ]
            ],
            [
                'name' => 'Proprietorship',
                'slug' => 'proprietorship-registration',
                'description' => 'Easiest way to start a business for a single person. Minimal compliance.',
                'price' => 1999.00,
                'icon_url' => null,
                'category' => 'Startup',
                'features' => ['GST Registration', 'Udyam Registration', 'Current Account Support'],
                'cms_content' => [
                    'hero' => [
                        'title' => 'Sole Proprietorship Registration',
                        'subtitle' => 'The simplest and most common way to start a business in India.',
                        'badge' => 'Easiest to Start'
                    ],
                    'benefits' => [
                        ['title' => 'Easy to Start', 'desc' => 'Need only 1 person and minimal documents.'],
                        ['title' => 'Minimal Compliance', 'desc' => 'No annual filing with MCA.'],
                        ['title' => 'Lower Cost', 'desc' => 'Very inexpensive to set up and run.'],
                        ['title' => 'Complete Control', 'desc' => 'You are the sole boss of your business.']
                    ],
                    'process' => [
                        ['step' => 1, 'title' => 'Application', 'desc' => 'Submit basic KYC details.'],
                        ['step' => 2, 'title' => 'Registrations', 'desc' => 'We apply for GST and Udyam (MSME).'],
                        ['step' => 3, 'title' => 'Certification', 'desc' => 'Receive your registration certificates.'],
                        ['step' => 4, 'title' => 'Bank Account', 'desc' => 'Open a current bank account easily.']
                    ],
                    'documents' => ['PAN Card', 'Aadhaar Card', 'Photo', 'Office Address Proof']
                ]
            ],
            [
                'name' => 'Section 8 Company (NGO)',
                'slug' => 'section-8-company',
                'description' => 'For non-profit organizations promoting art, science, charity, etc.',
                'price' => 12999.00,
                'icon_url' => null,
                'category' => 'Startup',
                'features' => ['License under Section 8', 'Incorporation Certificate', 'PAN & TAN'],
                'cms_content' => [
                    'hero' => [
                        'title' => 'Section 8 Company Registration',
                        'subtitle' => 'Start your Non-Profit Organization (NGO) with corporate structure.',
                        'badge' => 'Social Impact'
                    ],
                    'benefits' => [
                        ['title' => 'Credibility', 'desc' => 'More credible than Trust or Society.'],
                        ['title' => 'Donations', 'desc' => 'Easier to get donations and grants.'],
                        ['title' => 'Tax Exemptions', 'desc' => 'Eligible for 12A and 80G registration.'],
                        ['title' => 'Limited Liability', 'desc' => 'Members have limited liability.']
                    ],
                    'process' => [
                        ['step' => 1, 'title' => 'DSC & Name', 'desc' => 'Obtain DSC and approve name.'],
                        ['step' => 2, 'title' => 'License', 'desc' => 'Apply for Section 8 License from Regional Director.'],
                        ['step' => 3, 'title' => 'Incorporation', 'desc' => 'File SPICe+ for incorporation.'],
                        ['step' => 4, 'title' => 'Completion', 'desc' => 'Get COI, PAN, and TAN.']
                    ],
                    'documents' => ['PAN & Aadhaar of Directors', 'Photo', 'Rent Agreement (Office)', 'Electricity Bill']
                ]
            ],
            [
                'name' => 'Trust Registration',
                'slug' => 'trust-registration',
                'description' => 'Register a public charitable trust for social welfare.',
                'price' => 7999.00,
                'icon_url' => null,
                'category' => 'Startup',
                'features' => ['Trust Deed Drafting', 'Registration with Sub-Registrar', 'PAN Application'],
                'cms_content' => [
                    'hero' => [
                        'title' => 'Charitable Trust Registration',
                        'subtitle' => 'Establish a public charitable trust for philanthropic activities.',
                        'badge' => 'Non-Profit'
                    ],
                    'benefits' => [
                        ['title' => 'Social Welfare', 'desc' => 'Dedicated to charitable causes.'],
                        ['title' => 'Tax Benefits', 'desc' => 'Exemptions available under Income Tax Act.'],
                        ['title' => 'Easy Management', 'desc' => 'Simple to manage compared to companies.'],
                        ['title' => 'Long Term', 'desc' => 'Designed for long-term charitable goals.']
                    ],
                    'process' => [
                        ['step' => 1, 'title' => 'Drafting', 'desc' => 'We draft the Trust Deed.'],
                        ['step' => 2, 'title' => 'Appointment', 'desc' => 'Visit verification at Sub-Registrar office.'],
                        ['step' => 3, 'title' => 'Registration', 'desc' => 'Deed is registered by Sub-Registrar.'],
                        ['step' => 4, 'title' => 'PAN Card', 'desc' => 'Apply for Trust PAN card.']
                    ],
                    'documents' => ['ID Proof of Settlor & Trustees', 'Address Proof of Office', 'Photos', 'Witnesses']
                ]
            ],
            [
                'name' => 'Public Limited Company',
                'slug' => 'public-limited-company',
                'description' => 'Ideal for large scale businesses planning to raise funds from public.',
                'price' => 24999.00,
                'icon_url' => null,
                'category' => 'Startup',
                'features' => ['DSC (3 Nos)', 'DIN (3 Nos)', 'Name Approval', 'Incorporation Certificate'],
                'cms_content' => [
                    'hero' => [
                        'title' => 'Public Limited Company',
                        'subtitle' => 'For large businesses planning to go public and list on stock exchanges.',
                        'badge' => 'Large Scale'
                    ],
                    'benefits' => [
                        ['title' => 'Public Funding', 'desc' => 'Can raise funds from the general public.'],
                        ['title' => 'Limited Liability', 'desc' => 'Shareholders act as owners with limited risk.'],
                        ['title' => 'Growth Potential', 'desc' => 'Unlimited potential for expansion.'],
                        ['title' => 'Credibility', 'desc' => 'High credibility and transparency.']
                    ],
                    'process' => [
                        ['step' => 1, 'title' => 'DSC & Name', 'desc' => 'Get DSC for 3 Directors and Name Approval.'],
                        ['step' => 2, 'title' => 'Documents', 'desc' => 'Prepare MOA, AOA and other documents.'],
                        ['step' => 3, 'title' => 'Filing', 'desc' => 'File incorporation forms with ROC.'],
                        ['step' => 4, 'title' => 'Incorporation', 'desc' => 'Receive Certificate of Incorporation.']
                    ],
                    'documents' => ['PAN & Aadhaar of 3 Directors', 'Photos', 'Office Address Proof', 'Bank Statements']
                ]
            ],
            [
                'name' => 'Producer Company',
                'slug' => 'producer-company',
                'description' => 'For farmers and agriculturalists to improve their standard of living.',
                'price' => 14999.00,
                'icon_url' => null,
                'category' => 'Startup',
                'features' => ['DSC (5 Nos)', 'DIN (5 Nos)', 'Name Approval', 'Incorporation Certificate'],
                'cms_content' => [
                    'hero' => [
                        'title' => 'Producer Company Registration',
                        'subtitle' => 'Empowering farmers and agriculturalists through collective ownership.',
                        'badge' => 'Agriculture'
                    ],
                    'benefits' => [
                        ['title' => 'Separate Entity', 'desc' => 'Legal status separate from members.'],
                        ['title' => 'Limited Liability', 'desc' => 'Members liabilities are limited.'],
                        ['title' => 'Loans', 'desc' => 'Easier access to government loans and schemes.'],
                        ['title' => 'Better Prices', 'desc' => 'Collective bargaining power for better rates.']
                    ],
                    'process' => [
                        ['step' => 1, 'title' => 'DSC & Name', 'desc' => 'DSC for 5 Directors and Name Approval.'],
                        ['step' => 2, 'title' => 'Drafting', 'desc' => 'Draft MOA and AOA related to producer activities.'],
                        ['step' => 3, 'title' => 'Filing', 'desc' => 'File SPICe+ forms with ROC.'],
                        ['step' => 4, 'title' => 'Approval', 'desc' => 'Get Certificate of Incorporation.']
                    ],
                    'documents' => ['PAN & Aadhaar of 5 Directors', 'Farmer Certificate (7/12 etc)', 'Photos', 'Address Proof']
                ]
            ],
            [
                'name' => 'Indian Subsidiary',
                'slug' => 'indian-subsidiary',
                'description' => 'For foreign companies to set up business in India.',
                'price' => 29999.00,
                'icon_url' => null,
                'category' => 'Startup',
                'features' => ['DSC & DIN for Foreign Directors', 'Incorporation', 'FEMA Compliance'],
                'cms_content' => [
                    'hero' => [
                        'title' => 'Indian Subsidiary Registration',
                        'subtitle' => 'Expand your global business into the thriving Indian market.',
                        'badge' => 'Foreign Entry'
                    ],
                    'benefits' => [
                        ['title' => 'Control', 'desc' => 'Foreign parent company retains control.'],
                        ['title' => 'Market Access', 'desc' => 'Access to the vast Indian consumer base.'],
                        ['title' => 'Limited Liability', 'desc' => 'Separate legal entity from parent company.'],
                        ['title' => 'FDI Allowed', 'desc' => '100% FDI allowed in many sectors.']
                    ],
                    'process' => [
                        ['step' => 1, 'title' => 'DSC & DIN', 'desc' => 'Obtain DSC and DIN for directors.'],
                        ['step' => 2, 'title' => 'Name Approval', 'desc' => 'Reserve company name with MCA.'],
                        ['step' => 3, 'title' => 'Incorporation', 'desc' => 'File SPICe+ with foreign subscriber documents.'],
                        ['step' => 4, 'title' => 'Compliance', 'desc' => 'Bank account and FEMA reporting.']
                    ],
                    'documents' => ['Notarized/Apostilled KYC of Foreign Directors', 'Parent Company Documents', 'Office Proof in India']
                ]
            ],
            // Registrations
            [
                'name' => 'Startup India Registration',
                'slug' => 'startup-india-registration',
                'description' => 'Get recognized as a Startup by DPIIT and avail tax benefits.',
                'price' => 4999.00,
                'icon_url' => null,
                'category' => 'Registrations',
                'features' => ['DPIIT Recognition', 'Tax Exemption Eligibility', 'Consultation'],
                'cms_content' => ['hero' => ['title' => 'Startup India Registration', 'subtitle' => 'Get recognized by DPIIT.', 'badge' => 'Government Scheme'], 'benefits' => [['title' => 'Tax Exemption', 'desc' => '3 years tax holiday.']], 'process' => [['step' => 1, 'title' => 'Apply', 'desc' => 'Submit details.']], 'documents' => ['Incorporation Certificate', 'Pitch Deck']]
            ],
            [
                'name' => 'Import Export Code (IEC)',
                'slug' => 'import-export-code',
                'description' => 'Mandatory for export/import business. Lifetime validity.',
                'price' => 2999.00,
                'icon_url' => null,
                'category' => 'Registrations',
                'features' => ['Application Filing', 'DGFT Registration', 'Certificate Generation'],
                'cms_content' => ['hero' => ['title' => 'Import Export Code (IEC)', 'subtitle' => 'Mandatory for global trade.', 'badge' => 'Lifetime Validity'], 'benefits' => [['title' => 'Lifetime Validity', 'desc' => 'No renewal required.']], 'process' => [['step' => 1, 'title' => 'Apply', 'desc' => 'Submit KYC.']], 'documents' => ['PAN', 'Bank Certificate']]
            ],
            [
                'name' => 'Udyam Registration (MSME)',
                'slug' => 'udyam-registration',
                'description' => 'Get recognized as an MSME and avail government benefits/subsidies.',
                'price' => 999.00,
                'icon_url' => null,
                'category' => 'Registrations',
                'features' => ['MSME Certificate', 'Priority Lending Benefits', 'Subsidies'],
                'cms_content' => ['hero' => ['title' => 'Udyam Registration', 'subtitle' => 'MSME benefits for your business.', 'badge' => 'Free & Paperless'], 'benefits' => [['title' => 'Subsidies', 'desc' => 'Avail govt subsidies.']], 'process' => [['step' => 1, 'title' => 'Apply', 'desc' => 'Aadhaar based.']], 'documents' => ['Aadhaar', 'PAN']]
            ],
            [
                'name' => 'Shop & Establishment',
                'slug' => 'shop-establishment',
                'description' => 'State-specific registration for shops and commercial establishments.',
                'price' => 3999.00,
                'icon_url' => null,
                'category' => 'Registrations',
                'features' => ['State Labor Dept Filing', 'Certificate Issuance', 'Compliance'],
                'cms_content' => ['hero' => ['title' => 'Shop & Establishment License', 'subtitle' => 'Mandatory for all shops/offices.', 'badge' => 'State Law'], 'benefits' => [['title' => 'Legal Entity', 'desc' => 'Proof of business.']], 'process' => [['step' => 1, 'title' => 'Apply', 'desc' => 'State portal filing.']], 'documents' => ['Rent Agreement', 'Photos']]
            ],
            [
                'name' => 'Professional Tax',
                'slug' => 'professional-tax',
                'description' => 'Mandatory tax registration for employers and professionals.',
                'price' => 1999.00,
                'icon_url' => null,
                'category' => 'Registrations',
                'features' => ['PT EC/RC Registration', 'State Compliance', 'Challan Payment'],
                'cms_content' => ['hero' => ['title' => 'Professional Tax Registration', 'subtitle' => 'State tax on specific professions.', 'badge' => 'Mandatory'], 'benefits' => [['title' => 'Compliance', 'desc' => 'Avoids penalty.']], 'process' => [['step' => 1, 'title' => 'Register', 'desc' => 'Online application.']], 'documents' => ['PAN', 'Address Proof']]
            ],
            [
                'name' => 'Trade License',
                'slug' => 'trade-license',
                'description' => 'Permission to carry on a specific trade or business.',
                'price' => 4999.00,
                'icon_url' => null,
                'category' => 'Registrations',
                'features' => ['Municipal Corporation Filing', 'License Issuance', 'Renewal Support'],
                'cms_content' => ['hero' => ['title' => 'Trade License', 'subtitle' => 'Municipal permission for business.', 'badge' => 'Municipal'], 'benefits' => [['title' => 'Legality', 'desc' => 'Avoid closure.']], 'process' => [['step' => 1, 'title' => 'Apply', 'desc' => 'Local municipality.']], 'documents' => ['Property Tax Receipt', 'ID Proof']]
            ],
            [
                'name' => 'FSSAI Registration',
                'slug' => 'fssai-registration',
                'description' => 'Basic FSSAI Registration for small food businesses (Turnover < 12L).',
                'price' => 1999.00,
                'icon_url' => 'https://example.com/icons/fssai.svg',
                'category' => 'Registrations',
                'features' => ['14 Digit License Number', 'Certificate', 'Compliance'],
                'cms_content' => ['hero' => ['title' => 'FSSAI Registration', 'subtitle' => 'For petty food businesses.', 'badge' => 'Mandatory for Food'], 'benefits' => [['title' => 'Safety', 'desc' => 'Ensures food safety standards.']], 'process' => [['step' => 1, 'title' => 'Apply', 'desc' => 'FoSCoS portal.']], 'documents' => ['Photo', 'ID Proof']]
            ],
            [
                'name' => 'FSSAI License',
                'slug' => 'fssai-license',
                'description' => 'State/Central License for larger food businesses (Turnover > 12L).',
                'price' => 4999.00,
                'icon_url' => null,
                'category' => 'Registrations',
                'features' => ['State/Central License', 'Consultation', 'Documentation'],
                'cms_content' => ['hero' => ['title' => 'FSSAI License', 'subtitle' => 'For food manufacturers/traders.', 'badge' => 'State/Central'], 'benefits' => [['title' => 'Compliance', 'desc' => 'Mandatory for operations.']], 'process' => [['step' => 1, 'title' => 'Apply', 'desc' => 'Detailed application.']], 'documents' => ['Blueprints', 'List of Directors']]
            ],
            [
                'name' => 'Halal License & Certification',
                'slug' => 'halal-license',
                'description' => 'Certification for Halal compliance.',
                'price' => 9999.00,
                'icon_url' => null,
                'category' => 'Registrations',
                'features' => ['Audit', 'Certification', 'Compliance'],
                'cms_content' => ['hero' => ['title' => 'Halal Certification', 'subtitle' => 'Proof of Halal compliance.', 'badge' => 'Quality'], 'benefits' => [['title' => 'Export', 'desc' => 'Essential for Gulf export.']], 'process' => [['step' => 1, 'title' => 'Audit', 'desc' => 'Site audit.']], 'documents' => ['Process Details', 'Ingredient List']]
            ],
            [
                'name' => 'ICEGATE Registration',
                'slug' => 'icegate-registration',
                'description' => 'Registration for import/export customs clearance.',
                'price' => 2999.00,
                'icon_url' => null,
                'category' => 'Registrations',
                'features' => ['AD Code Registration', 'Profile Creation', 'Customs Access'],
                'cms_content' => ['hero' => ['title' => 'ICEGATE Registration', 'subtitle' => 'Gateway for customs clearance.', 'badge' => 'Customs'], 'benefits' => [['title' => 'Online', 'desc' => 'Paperless customs.']], 'process' => [['step' => 1, 'title' => 'Register', 'desc' => 'ICEGATE portal.']], 'documents' => ['IEC', 'DSC']]
            ],
            [
                'name' => 'Legal Entity Identifier (LEI)',
                'slug' => 'lei-code',
                'description' => 'Global 20-character code for financial transactions.',
                'price' => 5999.00,
                'icon_url' => null,
                'category' => 'Registrations',
                'features' => ['LEI Issuance', 'Global Recognition', 'RBI Compliance'],
                'cms_content' => ['hero' => ['title' => 'Legal Entity Identifier', 'subtitle' => 'For large financial transactions.', 'badge' => 'RBI Mandate'], 'benefits' => [['title' => 'Global', 'desc' => 'Global identification.']], 'process' => [['step' => 1, 'title' => 'Apply', 'desc' => 'LEIL portal.']], 'documents' => ['Incorporation Docs', 'Pan']]
            ],
            [
                'name' => 'ISO Registration',
                'slug' => 'iso-registration',
                'description' => 'ISO 9001:2015 and other certifications.',
                'price' => 3999.00,
                'icon_url' => null,
                'category' => 'Registrations',
                'features' => ['Audit', 'Certification', 'Quality Standards'],
                'cms_content' => ['hero' => ['title' => 'ISO Certification', 'subtitle' => 'Quality management standards.', 'badge' => 'Quality'], 'benefits' => [['title' => 'Trust', 'desc' => 'Customer trust.']], 'process' => [['step' => 1, 'title' => 'Audit', 'desc' => 'Verify standards.']], 'documents' => ['Process Docs']]
            ],
            [
                'name' => 'PF Registration',
                'slug' => 'pf-registration',
                'description' => 'Mandatory for establishments with 20+ employees.',
                'price' => 2999.00,
                'icon_url' => null,
                'category' => 'Registrations',
                'features' => ['Employer Registration', 'UAN Generation', 'Establishment Code'],
                'cms_content' => ['hero' => ['title' => 'PF Registration', 'subtitle' => 'Provident Fund for employees.', 'badge' => 'Social Security'], 'benefits' => [['title' => 'Savings', 'desc' => 'Employee savings.']], 'process' => [['step' => 1, 'title' => 'Register', 'desc' => 'EPFO portal.']], 'documents' => ['PAN', 'Cheque']]
            ],
            [
                'name' => 'ESI Registration',
                'slug' => 'esi-registration',
                'description' => 'Employee State Insurance registration for health benefits.',
                'price' => 2999.00,
                'icon_url' => null,
                'category' => 'Registrations',
                'features' => ['Employer Code', 'Employee Insurance', 'Health Benefits'],
                'cms_content' => ['hero' => ['title' => 'ESI Registration', 'subtitle' => 'Medical benefits for employees.', 'badge' => 'Labor Law'], 'benefits' => [['title' => 'Health', 'desc' => 'Medical cover.']], 'process' => [['step' => 1, 'title' => 'Apply', 'desc' => 'ESIC portal.']], 'documents' => ['PAN', 'Shop Act']]
            ],
            [
                'name' => 'RCMC Registration',
                'slug' => 'rcmc-registration',
                'description' => 'Registration Cum Membership Certificate for exporters.',
                'price' => 5999.00,
                'icon_url' => null,
                'category' => 'Registrations',
                'features' => ['Export Promotion Council', 'Benefits', 'Compliance'],
                'cms_content' => ['hero' => ['title' => 'RCMC Registration', 'subtitle' => 'Claim export benefits.', 'badge' => 'Export'], 'benefits' => [['title' => 'Incentives', 'desc' => 'Duty drawbacks.']], 'process' => [['step' => 1, 'title' => 'Apply', 'desc' => 'Relevant EPC.']], 'documents' => ['IEC', 'Membership Fee']]
            ],
            [
                'name' => 'TN RERA Agent Registration',
                'slug' => 'rera-agent-registration',
                'description' => 'Registration for Real Estate Agents.',
                'price' => 9999.00,
                'icon_url' => null,
                'category' => 'Registrations',
                'features' => ['Agent License', 'RERA ID', 'Compliance'],
                'cms_content' => ['hero' => ['title' => 'RERA Agent Registration', 'subtitle' => 'License for real estate agents.', 'badge' => 'Real Estate'], 'benefits' => [['title' => 'Legality', 'desc' => 'Legal practice.']], 'process' => [['step' => 1, 'title' => 'Apply', 'desc' => 'RERA portal.']], 'documents' => ['PAN', 'Address']]
            ],
            [
                'name' => '12A and 80G Registration',
                'slug' => '12a-80g-registration',
                'description' => 'Income tax exemption and donor tax benefit for NGOs.',
                'price' => 14999.00,
                'icon_url' => null,
                'category' => 'Registrations',
                'features' => ['Income Tax Exemption', 'Donor Benefits', 'Permanent Registration'],
                 'cms_content' => ['hero' => ['title' => '12A & 80G Registration', 'subtitle' => 'Tax benefits for NGOs.', 'badge' => 'Tax Saving'], 'benefits' => [['title' => 'Exemption', 'desc' => 'Tax free income.']], 'process' => [['step' => 1, 'title' => 'File', 'desc' => 'Form 10A.']], 'documents' => ['Trust Deed', 'Audit Report']]
            ],
             [
                'name' => 'Barcode Registration',
                'slug' => 'barcode-registration',
                'description' => 'Get GS1 Barcodes for your products.',
                'price' => 4999.00,
                'icon_url' => null,
                'category' => 'Registrations',
                'features' => ['GS1 Registration', 'Barcode Allocation', 'Product Listing'],
                'cms_content' => ['hero' => ['title' => 'Barcode Registration', 'subtitle' => 'Unique product identity.', 'badge' => 'Retail'], 'benefits' => [['title' => 'Retail', 'desc' => 'Modern retail ready.']], 'process' => [['step' => 1, 'title' => 'Apply', 'desc' => 'GS1 India.']], 'documents' => ['PAN', 'Product List']]
            ],
            [
                'name' => 'BIS Registration',
                'slug' => 'bis-registration',
                'description' => 'Bureau of Indian Standards certification.',
                'price' => 14999.00,
                'icon_url' => null,
                'category' => 'Registrations',
                'features' => ['ISI Mark', 'Testing', 'Compliance'],
                'cms_content' => ['hero' => ['title' => 'BIS Registration', 'subtitle' => 'Quality certification (ISI).', 'badge' => 'Safety'], 'benefits' => [['title' => 'Quality', 'desc' => 'Standard assurance.']], 'process' => [['step' => 1, 'title' => 'Test', 'desc' => 'Lab testing.']], 'documents' => ['Technical Spec', 'Factory License']]
            ],
             [
                'name' => 'Certificate of Incumbency',
                'slug' => 'certificate-incumbency',
                'description' => 'Official certificate listing directors and officers.',
                'price' => 2999.00,
                'icon_url' => null,
                'category' => 'Registrations',
                'features' => ['Company Secretary Attestation', 'Detailed Report', 'Fast Track'],
                'cms_content' => ['hero' => ['title' => 'Incumbency Certificate', 'subtitle' => 'List of current directors.', 'badge' => 'Corporate'], 'benefits' => [['title' => 'Proof', 'desc' => 'Proof of management.']], 'process' => [['step' => 1, 'title' => 'Draft', 'desc' => 'CS Certified.']], 'documents' => ['Register of Directors']]
            ],
             [
                'name' => 'Darpan Registration',
                'slug' => 'darpan-registration',
                'description' => 'NITI Aayog registration for NGOs.',
                'price' => 1999.00,
                'icon_url' => null,
                'category' => 'Registrations',
                'features' => ['Unique ID', 'Govt Grants', 'Trust Credibility'],
                'cms_content' => ['hero' => ['title' => 'NGO Darpan', 'subtitle' => 'NITI Aayog portal for NGOs.', 'badge' => 'Grants'], 'benefits' => [['title' => 'Grants', 'desc' => 'Apply for schemes.']], 'process' => [['step' => 1, 'title' => 'Register', 'desc' => 'Darpan portal.']], 'documents' => ['PAN', 'Registration Certificate']]
            ],
             [
                'name' => 'Digital Signature (DSC)',
                'slug' => 'dsc-service',
                'description' => 'Class 3 Digital Signature Certificate for e-filing.',
                'price' => 1499.00,
                'icon_url' => null,
                'category' => 'Registrations',
                'features' => ['Class 3 Signing', 'USB Token', '2 Years Validity'],
                'cms_content' => ['hero' => ['title' => 'Digital Signature', 'subtitle' => 'Secure e-filing.', 'badge' => 'Security'], 'benefits' => [['title' => 'E-Filing', 'desc' => 'Mandatory for MCA/GST.']], 'process' => [['step' => 1, 'title' => 'KYC', 'desc' => 'Video KYC.']], 'documents' => ['Aadhaar', 'Photo']]
            ],
            [
                'name' => 'Fire License',
                'slug' => 'fire-license',
                'description' => 'NOC from Fire Department for buildings/businesses.',
                'price' => 9999.00,
                'icon_url' => null,
                'category' => 'Registrations',
                'features' => ['Site Inspection', 'NOC Issuance', 'Safety Compliance'],
                'cms_content' => ['hero' => ['title' => 'Fire License / NOC', 'subtitle' => 'Fire safety compliance.', 'badge' => 'Safety'], 'benefits' => [['title' => 'Safety', 'desc' => 'Legal requirement.']], 'process' => [['step' => 1, 'title' => 'Plan', 'desc' => 'Building plan.']], 'documents' => ['Building Plan', 'Ownership Proof']]
            ],
             // Trademark
            [
                'name' => 'Trademark Registration',
                'slug' => 'trademark-registration',
                'description' => 'Protect your brand name, logo, and slogan. Secure your intellectual property.',
                'price' => 4999.00,
                'icon_url' => 'https://example.com/icons/trademark.svg',
                'category' => 'Trademark',
                'features' => ['Trademark Search', 'Class Selection', 'Application Filing', 'TM Number Generation'],
                 'cms_content' => ['hero' => ['title' => 'Trademark Registration', 'subtitle' => 'Protect your brand identity.', 'badge' => 'Brand Protection'], 'benefits' => [['title' => 'Legal Protection', 'desc' => 'Exclusive rights.']], 'process' => [['step' => 1, 'title' => 'Search', 'desc' => 'Check availability.']], 'documents' => ['Logo', 'KYC']]
            ],
            [
                'name' => 'Trademark Objection',
                'slug' => 'trademark-objection',
                'description' => 'Reply to trademark examination report.',
                'price' => 2999.00,
                'icon_url' => null,
                'category' => 'Trademark',
                'features' => ['Drafting Reply', 'Filing Response', 'Legal Consultation'],
                 'cms_content' => ['hero' => ['title' => 'Trademark Objection Reply', 'subtitle' => 'Clear your trademark objections.', 'badge' => 'Legal'], 'benefits' => [['title' => 'Approval', 'desc' => 'Higher chance of approval.']], 'process' => [['step' => 1, 'title' => 'Draft', 'desc' => 'Draft response.']], 'documents' => ['Examination Report', 'Affidavit']]
            ],
            [
                'name' => 'Trademark Certificate',
                'slug' => 'trademark-certificate',
                'description' => 'Obtain the final legal registration certificate.',
                'price' => 1999.00,
                'icon_url' => null,
                'category' => 'Trademark',
                'features' => ['Status Check', 'Certificate Download', 'Hard Copy (Optional)'],
                 'cms_content' => ['hero' => ['title' => 'Trademark Certificate', 'subtitle' => 'Get your registration certificate.', 'badge' => 'Final Step'], 'benefits' => [['title' => 'Proof', 'desc' => 'Legal proof of ownership.']], 'process' => [['step' => 1, 'title' => 'Check', 'desc' => 'Verify status.']], 'documents' => ['Application No']]
            ],
            [
                'name' => 'Trademark Opposition',
                'slug' => 'trademark-opposition',
                'description' => 'File or respond to trademark opposition.',
                'price' => 4999.00,
                'icon_url' => null,
                'category' => 'Trademark',
                'features' => ['Notice of Opposition', 'Counter Statement', 'Evidence Filing'],
                 'cms_content' => ['hero' => ['title' => 'Trademark Opposition', 'subtitle' => 'Defend your brand.', 'badge' => 'Litigation'], 'benefits' => [['title' => 'Defense', 'desc' => 'Protect rights.']], 'process' => [['step' => 1, 'title' => 'File', 'desc' => 'File documents.']], 'documents' => ['Evidence', 'Notice']]
            ],
            [
                'name' => 'Trademark Hearing',
                'slug' => 'trademark-hearing',
                'description' => 'Representation before the Trademark Registrar.',
                'price' => 5999.00,
                'icon_url' => null,
                'category' => 'Trademark',
                'features' => ['Hearing Representation', 'Written Submission', 'Legal Argument'],
                 'cms_content' => ['hero' => ['title' => 'Trademark Hearing', 'subtitle' => 'Legal representation.', 'badge' => 'Hearing'], 'benefits' => [['title' => 'Expertise', 'desc' => 'Professional layer.']], 'process' => [['step' => 1, 'title' => 'Attend', 'desc' => 'Attend hearing.']], 'documents' => ['Notice', 'Authorization']]
            ],
             [
                'name' => 'Trademark Rectification',
                'slug' => 'trademark-rectification',
                'description' => 'Correct errors or remove invalid trademarks.',
                'price' => 6999.00,
                'icon_url' => null,
                'category' => 'Trademark',
                'features' => ['Rectification Filing', 'Legal Grounds', 'Tribunal']
            ],
            [
                'name' => 'TM Infringement Notice',
                'slug' => 'tm-infringement-notice',
                'description' => 'Send legal notice for trademark violation.',
                'price' => 2999.00,
                'icon_url' => null,
                'category' => 'Trademark',
                'features' => ['Legal Notice Drafting', 'Desist Order', 'Evidence Compilation'],
                 'cms_content' => ['hero' => ['title' => 'Infringement Notice', 'subtitle' => 'Stop brand theft.', 'badge' => 'Legal Action'], 'benefits' => [['title' => 'Stop', 'desc' => 'Halt violation.']], 'process' => [['step' => 1, 'title' => 'Draft', 'desc' => 'Legal notice.']], 'documents' => ['Infrigement Proof', 'TM Cert']]
            ],
            [
                'name' => 'Trademark Renewal',
                'slug' => 'trademark-renewal',
                'description' => 'Renew your trademark every 10 years.',
                'price' => 5999.00,
                'icon_url' => null,
                'category' => 'Trademark',
                'features' => ['Renewal Application', 'Status Check', 'Certificate'],
                 'cms_content' => ['hero' => ['title' => 'Trademark Renewal', 'subtitle' => 'Keep your brand protected.', 'badge' => 'Maintenance'], 'benefits' => [['title' => 'Validity', 'desc' => 'Extend for 10 years.']], 'process' => [['step' => 1, 'title' => 'Apply', 'desc' => 'File form TM-R.']], 'documents' => ['TM Certificate', 'KYC']]
            ],
            [
                'name' => 'Trademark Transfer',
                'slug' => 'trademark-transfer',
                'description' => 'Transfer trademark ownership (Assignment).',
                'price' => 7999.00,
                'icon_url' => null,
                'category' => 'Trademark',
                'features' => ['Assignment Deed', 'Application Filing', 'Name Change'],
                 'cms_content' => ['hero' => ['title' => 'Trademark Transfer', 'subtitle' => 'Sell or transfer your brand.', 'badge' => 'Transfer'], 'benefits' => [['title' => 'Monetize', 'desc' => 'Sell brand value.']], 'process' => [['step' => 1, 'title' => 'Deed', 'desc' => 'Sign deed.']], 'documents' => ['Deed', 'NOC']]
            ],
            [
                'name' => 'Expedited TM Registration',
                'slug' => 'expedited-tm-registration',
                'description' => 'Fast-track trademark registration.',
                'price' => 14999.00,
                'icon_url' => null,
                'category' => 'Trademark',
                'features' => ['Priority Filing', 'Faster Examination', 'Quick Status'],
                 'cms_content' => ['hero' => ['title' => 'Expedited Trademark', 'subtitle' => 'Get registered faster.', 'badge' => 'Fast Track'], 'benefits' => [['title' => 'Speed', 'desc' => 'Cut wait time.']], 'process' => [['step' => 1, 'title' => 'Apply', 'desc' => 'Form TM-A.']], 'documents' => ['Startup Cert', 'MSME']]
            ],
            [
                'name' => 'Logo Designing',
                'slug' => 'logo-designing',
                'description' => 'Professional logo design for your brand.',
                'price' => 1999.00,
                'icon_url' => null,
                'category' => 'Trademark',
                'features' => ['Unique Concepts', 'Vector Files', 'Copyright Ready'],
                 'cms_content' => ['hero' => ['title' => 'Logo Design', 'subtitle' => 'Create your brand identity.', 'badge' => 'Design'], 'benefits' => [['title' => 'Unique', 'desc' => 'Custom design.']], 'process' => [['step' => 1, 'title' => 'Brief', 'desc' => 'Design brief.']], 'documents' => ['Preferences']]
            ],
            [
                'name' => 'Design Registration',
                'slug' => 'design-registration',
                'description' => 'Protect the aesthetics of your product.',
                'price' => 7999.00,
                'icon_url' => null,
                'category' => 'Trademark',
                'features' => ['Application Filing', 'Examination', 'Registration'],
                'cms_content' => ['hero' => ['title' => 'Design Registration', 'subtitle' => 'Protect product look.', 'badge' => 'Aesthetics'], 'benefits' => [['title' => 'Unique', 'desc' => 'Prevent copying.']], 'process' => [['step' => 1, 'title' => 'File', 'desc' => 'Submit photos.']], 'documents' => ['Photos', 'Description']]
            ],
             [
                'name' => 'Design Objection',
                'slug' => 'design-objection',
                'description' => 'Reply to design examination report.',
                'price' => 3999.00,
                'icon_url' => null,
                'category' => 'Trademark',
                'features' => ['Technical Reply', 'Legal Argument', 'Filing'],
                 'cms_content' => ['hero' => ['title' => 'Design Objection', 'subtitle' => 'Clear design objections.', 'badge' => 'Legal'], 'benefits' => [['title' => 'Clearance', 'desc' => 'Get registered.']], 'process' => [['step' => 1, 'title' => 'Reply', 'desc' => 'Draft response.']], 'documents' => ['Exam Report']]
            ],
            [
                'name' => 'Copyright Registration',
                'slug' => 'copyright-registration',
                'description' => 'Protect your creative works like books, music, and software.',
                'price' => 5999.00,
                'icon_url' => null,
                'category' => 'Trademark',
                'features' => ['Application Filing', 'Diary Number', 'Certificate'],
                'cms_content' => ['hero' => ['title' => 'Copyright Registration', 'subtitle' => 'Protect your creativity.', 'badge' => 'IP Rights'], 'benefits' => [['title' => 'Ownership', 'desc' => 'Legal proof of ownership.']], 'process' => [['step' => 1, 'title' => 'Apply', 'desc' => 'File details.']], 'documents' => ['Work Copy', 'NOC']]
            ],
            [
                'name' => 'Copyright Objection',
                'slug' => 'copyright-objection',
                'description' => 'Response to copyright discrepancies.',
                'price' => 2999.00,
                'icon_url' => null,
                'category' => 'Trademark',
                'features' => ['Discrepancy Reply', 'Legal Argument', 'Hearing'],
                 'cms_content' => ['hero' => ['title' => 'Copyright Objection', 'subtitle' => 'Resolve copyright issues.', 'badge' => 'Legal'], 'benefits' => [['title' => 'Resolution', 'desc' => 'Get registered.']], 'process' => [['step' => 1, 'title' => 'Reply', 'desc' => 'File response.']], 'documents' => ['Discrepancy Letter']]
            ],
             [
                'name' => 'Patent Registration',
                'slug' => 'patent-registration',
                'description' => 'Protect your invention. 20-year exclusivity rights.',
                'price' => 24999.00,
                'icon_url' => null,
                'category' => 'Trademark',
                'features' => ['Provisional Application', 'Complete Specification', 'Publication'],
                'cms_content' => ['hero' => ['title' => 'Patent Registration', 'subtitle' => 'Protect your invention.', 'badge' => 'Innovation'], 'benefits' => [['title' => 'Monopoly', 'desc' => '20 year rights.']], 'process' => [['step' => 1, 'title' => 'Draft', 'desc' => 'Patent drafting.']], 'documents' => ['Specs', 'Drawings']]
            ],
             [
                'name' => 'Trademark Protection',
                'slug' => 'trademark-protection',
                'description' => 'Monitoring service to detect infringements.',
                'price' => 9999.00,
                'icon_url' => null,
                'category' => 'Trademark',
                'features' => ['Watch Service', 'Alerts', 'Legal Advice'],
                 'cms_content' => ['hero' => ['title' => 'Trademark Protection', 'subtitle' => 'Continuous brand monitoring.', 'badge' => 'Watch'], 'benefits' => [['title' => 'Safety', 'desc' => 'Early detection.']], 'process' => [['step' => 1, 'title' => 'Monitor', 'desc' => 'Monthly reports.']], 'documents' => ['TM Number']]
            ],
             // GST
            [
                'name' => 'GST Registration',
                'slug' => 'gst-registration',
                'description' => 'Mandatory for businesses with turnover > 20 Lakhs. Get GSTIN in 3-5 days.',
                'price' => 1499.00,
                'icon_url' => 'https://example.com/icons/gst.svg',
                'category' => 'GST',
                'features' => ['Application Filing', 'ARN Generation', 'Query Resolution', 'GST Certificate'],
                'cms_content' => ['hero' => ['title' => 'GST Registration', 'subtitle' => 'Get your GSTIN number.', 'badge' => 'Tax'], 'benefits' => [['title' => 'Compliance', 'desc' => 'Legal requirement.']], 'process' => [['step' => 1, 'title' => 'Apply', 'desc' => 'GST portal.']], 'documents' => ['PAN', 'Rent Agreement']]
            ],
            [
                'name' => 'GST Return Filing',
                'slug' => 'gst-return-filing',
                'description' => 'Monthly/Quarterly GST return filing for regular taxpayers.',
                'price' => 999.00,
                'icon_url' => null,
                'category' => 'GST',
                'features' => ['GSTR-1 & 3B', 'ITC Reconciliation', 'Challan Generation'],
                'cms_content' => ['hero' => ['title' => 'GST Return Filing', 'subtitle' => 'Timely GST compliance.', 'badge' => 'Monthly'], 'benefits' => [['title' => 'ITC', 'desc' => 'Claim input tax credit.']], 'process' => [['step' => 1, 'title' => 'Data', 'desc' => 'Upload invoices.']], 'documents' => ['Sales', 'Purchase']]
            ],
            [
                'name' => 'LUT Filing (Export)',
                'slug' => 'lut-filing',
                'description' => 'Letter of Undertaking for exporting goods/services without paying IGST.',
                'price' => 999.00,
                'icon_url' => null,
                'category' => 'GST',
                'features' => ['Application Filing', 'ARN Generation', 'Validity 1 Year'],
                'cms_content' => ['hero' => ['title' => 'LUT Filing', 'subtitle' => 'Export without IGST.', 'badge' => 'Export'], 'benefits' => [['title' => 'Cashflow', 'desc' => 'Save working capital.']], 'process' => [['step' => 1, 'title' => 'Apply', 'desc' => 'GST portal.']], 'documents' => ['GSTIN', 'DSC']]
            ],
            [
                'name' => 'GST Amendment',
                'slug' => 'gst-amendment',
                'description' => 'Change details in your GST registration.',
                'price' => 1499.00,
                'icon_url' => null,
                'category' => 'GST',
                'features' => ['Core Fields', 'Non-Core Fields', 'Certificate Update'],
                'cms_content' => ['hero' => ['title' => 'GST Amendment', 'subtitle' => 'Update GST details.', 'badge' => 'Update'], 'benefits' => [['title' => 'Accuracy', 'desc' => 'Keep record updated.']], 'process' => [['step' => 1, 'title' => 'File', 'desc' => 'File amendment.']], 'documents' => ['Supporting Docs']]
            ],
            [
                'name' => 'GST Cancellation',
                'slug' => 'gst-cancellation',
                'description' => 'Surrender your GST registration.',
                'price' => 1999.00,
                'icon_url' => null,
                'category' => 'GST',
                'features' => ['Application Filing', 'Final Return', 'Order Generation'],
                'cms_content' => ['hero' => ['title' => 'GST Cancellation', 'subtitle' => 'Surrender GSTIN.', 'badge' => 'Closure'], 'benefits' => [['title' => 'Stop Compliance', 'desc' => 'No more returns.']], 'process' => [['step' => 1, 'title' => 'Apply', 'desc' => 'Reason for closure.']], 'documents' => ['Final Return']]
            ],
            [
                'name' => 'GST Annual Return',
                'slug' => 'gst-annual-return',
                'description' => 'GSTR-9 and GSTR-9C filing.',
                'price' => 4999.00,
                'icon_url' => null,
                'category' => 'GST',
                'features' => ['GSTR-9 Filing', 'Reconciliation', 'Audit Support'],
                'cms_content' => ['hero' => ['title' => 'GST Annual Return', 'subtitle' => 'Yearly GST compliance.', 'badge' => 'Annual'], 'benefits' => [['title' => 'Audit', 'desc' => 'Avoid scrutiny.']], 'process' => [['step' => 1, 'title' => 'Data', 'desc' => 'Compile yearly data.']], 'documents' => ['Books of Accounts']]
            ],
             [
                'name' => 'E-Way Bill',
                'slug' => 'eway-bill',
                'description' => 'Registration and generation of E-Way bills.',
                'price' => 999.00,
                'icon_url' => null,
                'category' => 'GST',
                'features' => ['Registration', 'Generation', 'Management'],
                'cms_content' => ['hero' => ['title' => 'E-Way Bill', 'subtitle' => 'Movement of goods.', 'badge' => 'Logistics'], 'benefits' => [['title' => 'Transit', 'desc' => 'Legal transport.']], 'process' => [['step' => 1, 'title' => 'Generate', 'desc' => 'EWB portal.']], 'documents' => ['Invoice', 'Transporter ID']]
            ],
              [
                'name' => 'GST Refund',
                'slug' => 'gst-refund',
                'description' => 'Claim refund of excess GST paid.',
                'price' => 4999.00,
                'icon_url' => null,
                'category' => 'GST',
                'features' => ['Application Filing', 'Follow up', 'Bank Credit'],
                'cms_content' => ['hero' => ['title' => 'GST Refund', 'subtitle' => 'Get money back.', 'badge' => 'Refund'], 'benefits' => [['title' => 'Cash', 'desc' => 'Liquidity.']], 'process' => [['step' => 1, 'title' => 'Claim', 'desc' => 'RFD-01.']], 'documents' => ['Invoices', 'Calculation']]
            ],
            // Income Tax
            [
                'name' => 'Income Tax E-Filing',
                'slug' => 'income-tax-filing',
                'description' => 'Expert-assisted ITR filing for salaried, professionals, and businesses.',
                'price' => 799.00,
                'icon_url' => 'https://example.com/icons/tax.svg',
                'category' => 'Income Tax',
                'features' => ['ITR Filing', 'Tax Audit', 'Capital Gains', 'Notice Management'],
                 'cms_content' => ['hero' => ['title' => 'Income Tax Filing', 'subtitle' => 'File your ITR accurately.', 'badge' => 'Tax'], 'benefits' => [['title' => 'Refund', 'desc' => 'Claim tax refund.']], 'process' => [['step' => 1, 'title' => 'Docs', 'desc' => 'Submit Form 16.']], 'documents' => ['PAN', 'Bank Statement']]
            ],
             [
                'name' => 'Business Tax Filing',
                'slug' => 'business-tax-filing',
                'description' => 'Tax filing for small businesses and freelancers.',
                'price' => 1499.00,
                'icon_url' => null,
                'category' => 'Income Tax',
                'features' => ['P&L Account', 'Balance Sheet', 'ITR-3/4'],
                 'cms_content' => ['hero' => ['title' => 'Business Tax Filing', 'subtitle' => 'ITR for businesses.', 'badge' => 'Business'], 'benefits' => [['title' => 'Compliance', 'desc' => 'Avoid penalties.']], 'process' => [['step' => 1, 'title' => 'Data', 'desc' => 'Financials.']], 'documents' => ['Bank Statement', 'Books']]
            ],
            [
                'name' => 'Partnership Firm / LLP ITR',
                'slug' => 'partnership-llp-itr',
                'description' => 'ITR-5 Filing for Partnerships and LLPs.',
                'price' => 2499.00,
                'icon_url' => null,
                'category' => 'Income Tax',
                'features' => ['ITR-5', 'Partner Salary', 'Audit Support'],
                 'cms_content' => ['hero' => ['title' => 'Partnership/LLP ITR', 'subtitle' => 'Tax filing for firms.', 'badge' => 'Firm'], 'benefits' => [['title' => 'Deductions', 'desc' => 'Claim partner salary.']], 'process' => [['step' => 1, 'title' => 'File', 'desc' => 'ITR-5.']], 'documents' => ['Deed', 'Financials']]
            ],
            [
                'name' => 'Company ITR Filing',
                'slug' => 'company-itr-filing',
                'description' => 'ITR-6 Filing for Private Limited Companies.',
                'price' => 4999.00,
                'icon_url' => null,
                'category' => 'Income Tax',
                'features' => ['ITR-6', 'Audit Report', 'Balance Sheet'],
                 'cms_content' => ['hero' => ['title' => 'Company ITR Filing', 'subtitle' => 'Corporate tax filing.', 'badge' => 'Corporate'], 'benefits' => [['title' => 'Compliance', 'desc' => 'MCA & Tax sync.']], 'process' => [['step' => 1, 'title' => 'Audit', 'desc' => 'Statutory audit.']], 'documents' => ['Audit Report', 'Financials']]
            ],
            [
                'name' => 'Trust / NGO Tax Filing',
                'slug' => 'trust-ngo-tax-filing',
                'description' => 'ITR-7 Filing for Trusts and NGOs.',
                'price' => 3999.00,
                'icon_url' => null,
                'category' => 'Income Tax',
                'features' => ['ITR-7', 'Audit Report 10B', 'Exemption Claim'],
                 'cms_content' => ['hero' => ['title' => 'NGO Tax Filing', 'subtitle' => 'Claim exemptions.', 'badge' => 'Non-Profit'], 'benefits' => [['title' => 'Exemption', 'desc' => '12A benefits.']], 'process' => [['step' => 1, 'title' => 'Form 10B', 'desc' => 'Audit filing.']], 'documents' => ['Trust Deed', 'FCRA']]
            ],
             [
                'name' => '15CA - 15CB Filing',
                'slug' => '15ca-15cb-filing',
                'description' => 'Foreign remittance compliance.',
                'price' => 2999.00,
                'icon_url' => null,
                'category' => 'Income Tax',
                'features' => ['Form 15CA', 'CA Certificate 15CB', 'Remittance Support'],
                 'cms_content' => ['hero' => ['title' => '15CA & 15CB', 'subtitle' => 'Foreign payment compliance.', 'badge' => 'FEMA'], 'benefits' => [['title' => 'Remit', 'desc' => 'Send money abroad.']], 'process' => [['step' => 1, 'title' => 'Certify', 'desc' => 'CA Sign.']], 'documents' => ['Invoice', 'TRC']]
            ],
             [
                'name' => 'TAN Registration',
                'slug' => 'tan-registration',
                'description' => 'Tax Deduction Account Number for businesses.',
                'price' => 999.00,
                'icon_url' => null,
                'category' => 'Income Tax',
                'features' => ['Application', 'TAN Allotment', 'Dispatch'],
                 'cms_content' => ['hero' => ['title' => 'TAN Registration', 'subtitle' => 'Deduct TDS legally.', 'badge' => 'TDS'], 'benefits' => [['title' => 'Mandatory', 'desc' => 'For deducting TDS.']], 'process' => [['step' => 1, 'title' => 'Apply', 'desc' => 'Form 49B.']], 'documents' => ['PAN', 'Office Proof']]
            ],
            [
                'name' => 'TDS Return Filing',
                'slug' => 'tds-return-filing',
                'description' => 'Quarterly TDS returns for salaries and non-salaries.',
                'price' => 1999.00,
                'icon_url' => null,
                'category' => 'Income Tax',
                'features' => ['Form 24Q/26Q', 'Challan Verification', 'Certificate Generation'],
                 'cms_content' => ['hero' => ['title' => 'TDS Return Filing', 'subtitle' => 'Quarterly TDS compliance.', 'badge' => 'Compliance'], 'benefits' => [['title' => 'Compliance', 'desc' => 'Avoid notices.']], 'process' => [['step' => 1, 'title' => 'Data', 'desc' => 'Deduction details.']], 'documents' => ['Challans', 'PAN']]
            ],
            [
                'name' => 'Income Tax Notice',
                'slug' => 'tax-notice-response',
                'description' => 'Expert reply to Income Tax notices.',
                'price' => 1999.00,
                'icon_url' => null,
                'category' => 'Income Tax',
                'features' => ['Notice Analysis', 'Reply Drafting', 'Representation'],
                 'cms_content' => ['hero' => ['title' => 'Tax Notice Response', 'subtitle' => 'Expert notice handling.', 'badge' => 'Legal'], 'benefits' => [['title' => 'Peace of mind', 'desc' => 'Expert handling.']], 'process' => [['step' => 1, 'title' => 'Analyze', 'desc' => 'Review notice.']], 'documents' => ['Notice Copy']]
            ],
             [
                'name' => 'Revised ITR Return (ITR-U)',
                'slug' => 'revised-itr-return',
                'description' => 'File updated return for past years.',
                'price' => 2499.00,
                'icon_url' => null,
                'category' => 'Income Tax',
                'features' => ['Error Correction', 'Additional Tax Payment', 'Compliance'],
                 'cms_content' => ['hero' => ['title' => 'Revised Return (ITR-U)', 'subtitle' => 'Fix past mistakes.', 'badge' => 'Correction'], 'benefits' => [['title' => 'Clean', 'desc' => 'Regularize records.']], 'process' => [['step' => 1, 'title' => 'Assess', 'desc' => 'Calculate tax.']], 'documents' => ['Original ITR']]
            ],

             // HR & Payroll
            [
                'name' => 'Payroll Outsourcing',
                'slug' => 'payroll-outsourcing',
                'description' => 'End-to-end payroll management for your employees.',
                'price' => 4999.00,
                'icon_url' => null,
                'category' => 'HR & Payroll',
                'features' => ['Salary Calculation', 'Payslip Generation', 'TDS Deduction'],
                 'cms_content' => ['hero' => ['title' => 'Payroll Outsourcing', 'subtitle' => 'Simplify your payroll.', 'badge' => 'HR'], 'benefits' => [['title' => 'Accuracy', 'desc' => 'Error free salary.']], 'process' => [['step' => 1, 'title' => 'Data', 'desc' => 'Attendance data.']], 'documents' => ['Employee List', 'CTC']]
            ],
             // MCA
             [
                'name' => 'Company Compliance',
                'slug' => 'company-compliance',
                'description' => 'Mandatory annual filing for Private Limited Companies.',
                'price' => 11999.00,
                'icon_url' => null,
                'category' => 'MCA',
                'features' => ['AOC-4 & MGT-7', 'Director KYC', 'Income Tax Return', 'Audit Support'],
                 'cms_content' => ['hero' => ['title' => 'Company Compliance', 'subtitle' => 'Annual MCA filing.', 'badge' => 'Yearly'], 'benefits' => [['title' => 'Penalty Free', 'desc' => 'Avoid fines.']], 'process' => [['step' => 1, 'title' => 'Audit', 'desc' => 'Financial audit.']], 'documents' => ['Bank Statements', 'Invoices']]
            ],
            [
                'name' => 'LLP Compliance',
                'slug' => 'llp-compliance',
                'description' => 'Mandatory annual filing for Limited Liability Partnerships.',
                'price' => 6999.00,
                'icon_url' => null,
                'category' => 'MCA', // Moved to MCA based on screenshot
                'features' => ['Form 11 & Form 8', 'Income Tax Return', 'Audit Support'],
                 'cms_content' => ['hero' => ['title' => 'LLP Compliance', 'subtitle' => 'Annual LLP filing.', 'badge' => 'Yearly'], 'benefits' => [['title' => 'Active', 'desc' => 'Maintain status.']], 'process' => [['step' => 1, 'title' => 'Forms', 'desc' => 'Form 8 & 11.']], 'documents' => ['Financials', 'DSC']]
            ],
            [
                'name' => 'OPC Compliance',
                'slug' => 'opc-compliance',
                'description' => 'Annual compliance for One Person Companies.',
                'price' => 9999.00,
                'icon_url' => null,
                'category' => 'MCA',
                'features' => ['AOC-4', 'MGT-7', 'ITR Filing'],
                 'cms_content' => ['hero' => ['title' => 'OPC Compliance', 'subtitle' => 'One Person Company filing.', 'badge' => 'Compliance'], 'benefits' => [['title' => 'Legal', 'desc' => 'Stay compliant.']], 'process' => [['step' => 1, 'title' => 'File', 'desc' => 'Annual forms.']], 'documents' => ['Bank Statement', 'Expenses']]
            ],
            [
                'name' => 'Change Company Name',
                'slug' => 'change-company-name',
                'description' => 'Change the name of your existing company.',
                'price' => 4999.00,
                'icon_url' => null,
                'category' => 'MCA',
                'features' => ['Name Approval', 'MGT-14', 'Fresh COI'],
                 'cms_content' => ['hero' => ['title' => 'Change Company Name', 'subtitle' => 'Rebrand your business.', 'badge' => 'Rebranding'], 'benefits' => [['title' => 'New Identity', 'desc' => 'Fresh start.']], 'process' => [['step' => 1, 'title' => 'Approve', 'desc' => 'RUN name.']], 'documents' => ['Board Resolution', 'Shareholder Consent']]
            ],
             [
                'name' => 'Registered Office Change',
                'slug' => 'registered-office-change',
                'description' => 'Shift your registered office from one place to another.',
                'price' => 2499.00,
                'icon_url' => null,
                'category' => 'MCA',
                'features' => ['INC-22 Filing', 'Board Resolution', 'Rent Agreement Verification'],
                 'cms_content' => ['hero' => ['title' => 'Change Address', 'subtitle' => 'Shift registered office.', 'badge' => 'Update'], 'benefits' => [['title' => 'Official', 'desc' => 'New address record.']], 'process' => [['step' => 1, 'title' => 'File', 'desc' => 'INC-22.']], 'documents' => ['Rent Agreement', 'Utility Bill']]
            ],
             [
                'name' => 'DIN eKYC Filing',
                'slug' => 'din-ekyc-filing',
                'description' => 'Mandatory annual KYC for all Directors.',
                'price' => 999.00,
                'icon_url' => null,
                'category' => 'MCA',
                'features' => ['DIR-3 KYC', 'OTP Verification', 'Compliance'],
                 'cms_content' => ['hero' => ['title' => 'Director KYC', 'subtitle' => 'Annual director verification.', 'badge' => 'Mandatory'], 'benefits' => [['title' => 'Active', 'desc' => 'Keep DIN active.']], 'process' => [['step' => 1, 'title' => 'Verify', 'desc' => 'OTP based.']], 'documents' => ['PAN', 'Aadhaar']]
            ],
            [
                'name' => 'DIN Reactivation',
                'slug' => 'din-reactivation',
                'description' => 'Reactivate disqualified or deactivated DIN.',
                'price' => 4999.00,
                'icon_url' => null,
                'category' => 'MCA',
                'features' => ['DIR-3 KYC', 'Penalty Payment', 'Reactivation'],
                 'cms_content' => ['hero' => ['title' => 'DIN Reactivation', 'subtitle' => 'Activate your DIN.', 'badge' => 'Director'], 'benefits' => [['title' => 'Active', 'desc' => 'Become director again.']], 'process' => [['step' => 1, 'title' => 'KCY', 'desc' => 'File DIR-3 KYC.']], 'documents' => ['PAN', 'Passport']]
            ],
             [
                'name' => 'Add Director',
                'slug' => 'add-director',
                'description' => 'Appoint a new director to your company.',
                'price' => 1999.00,
                'icon_url' => null,
                'category' => 'MCA',
                'features' => ['DIR-12 Filing', 'Resolution', 'Consent'],
                 'cms_content' => ['hero' => ['title' => 'Add Director', 'subtitle' => 'Expand your board.', 'badge' => 'Growth'], 'benefits' => [['title' => 'Leadership', 'desc' => 'New expertise.']], 'process' => [['step' => 1, 'title' => 'Consent', 'desc' => 'DIR-2.']], 'documents' => ['PAN', 'Aadhaar']]
            ],
            [
                'name' => 'Remove Director',
                'slug' => 'remove-director',
                'description' => 'Resign or remove a director.',
                'price' => 1999.00,
                'icon_url' => null,
                'category' => 'MCA',
                'features' => ['DIR-12 Filing', 'Resignation Letter', 'Resolution'],
                 'cms_content' => ['hero' => ['title' => 'Remove Director', 'subtitle' => 'Director resignation.', 'badge' => 'Management'], 'benefits' => [['title' => 'Update', 'desc' => 'Current records.']], 'process' => [['step' => 1, 'title' => 'File', 'desc' => 'DIR-12.']], 'documents' => ['Resignation Letter', 'Resolution']]
            ],
            [
                'name' => 'ADT-1 Filing',
                'slug' => 'adt-1-filing',
                'description' => 'Appointment of Auditor.',
                'price' => 1499.00,
                'icon_url' => null,
                'category' => 'MCA',
                'features' => ['ADT-1 Form', 'Auditor Consent', 'Resolution'],
                 'cms_content' => ['hero' => ['title' => 'Auditor Appointment', 'subtitle' => 'File ADT-1.', 'badge' => 'Audit'], 'benefits' => [['title' => 'Compliance', 'desc' => 'Statutory requirement.']], 'process' => [['step' => 1, 'title' => 'Appoint', 'desc' => 'AGM/EGM.']], 'documents' => ['Consent Letter', 'Resolution']]
            ],
            [
                'name' => 'DPT-3 Filing',
                'slug' => 'dpt-3-filing',
                'description' => 'Return of deposits.',
                'price' => 2499.00,
                'icon_url' => null,
                'category' => 'MCA',
                'features' => ['DPT-3 Form', 'Auditor Certificate', 'Financials'],
                 'cms_content' => ['hero' => ['title' => 'DPT-3 Filing', 'subtitle' => 'Return of deposits.', 'badge' => 'Deposits'], 'benefits' => [['title' => 'Disclosure', 'desc' => 'Transparancy.']], 'process' => [['step' => 1, 'title' => 'Certify', 'desc' => 'Auditor cert.']], 'documents' => ['Loan List', 'Financials']]
            ],
            [
                'name' => 'LLP Form 11 Filing',
                'slug' => 'llp-form-11-filing',
                'description' => 'Annual return filing for LLP.',
                'price' => 1999.00,
                'icon_url' => null,
                'category' => 'MCA',
                'features' => ['Form 11', 'Partner Details', 'Turnover'],
                 'cms_content' => ['hero' => ['title' => 'LLP Form 11', 'subtitle' => 'Annual return.', 'badge' => 'Annual'], 'benefits' => [['title' => 'Penalty', 'desc' => 'Avoid penalty.']], 'process' => [['step' => 1, 'title' => 'Data', 'desc' => 'Review details.']], 'documents' => ['Partner List', 'Contribution']]
            ],
            [
                'name' => 'Dormant Status Filing',
                'slug' => 'dormant-status-filing',
                'description' => 'Apply for dormant status (MSC-1).',
                'price' => 4999.00,
                'icon_url' => null,
                'category' => 'MCA',
                'features' => ['MSC-1 Filing', 'Compliance Pause', 'Inactive Status'],
                 'cms_content' => ['hero' => ['title' => 'Dormant Status', 'subtitle' => 'Pause your company.', 'badge' => 'Inactive'], 'benefits' => [['title' => 'Save Cost', 'desc' => 'Reduced compliance.']], 'process' => [['step' => 1, 'title' => 'Apply', 'desc' => 'MSC-1.']], 'documents' => ['Financials', 'Resolution']]
            ],
            [
                'name' => 'MOA Amendment',
                'slug' => 'moa-amendment',
                'description' => 'Alteration of Memorandum of Association.',
                'price' => 3999.00,
                'icon_url' => null,
                'category' => 'MCA',
                'features' => ['MGT-14', 'Special Resolution', 'New Clauses'],
                 'cms_content' => ['hero' => ['title' => 'MOA Amendment', 'subtitle' => 'Change objects/clauses.', 'badge' => 'Legal'], 'benefits' => [['title' => 'Flexibility', 'desc' => 'Expand business.']], 'process' => [['step' => 1, 'title' => 'EGM', 'desc' => 'Pass resolution.']], 'documents' => ['Resolution', 'Proposed MOA']]
            ],
            [
                'name' => 'AOA Amendment',
                'slug' => 'aoa-amendment',
                'description' => 'Alteration of Articles of Association.',
                'price' => 3999.00,
                'icon_url' => null,
                'category' => 'MCA',
                'features' => ['MGT-14', 'Special Resolution', 'New Rules'],
                 'cms_content' => ['hero' => ['title' => 'AOA Amendment', 'subtitle' => 'Change internal rules.', 'badge' => 'Legal'], 'benefits' => [['title' => 'Update', 'desc' => 'Modernize rules.']], 'process' => [['step' => 1, 'title' => 'EGM', 'desc' => 'Special resolution.']], 'documents' => ['Resolution', 'Proposed AOA']]
            ],
            [
                'name' => 'Increase Authorized Capital',
                'slug' => 'increase-capital',
                'description' => 'Increase the capacity to issue more shares.',
                'price' => 3999.00,
                'icon_url' => null,
                'category' => 'MCA',
                'features' => ['SH-7 Filing', 'Stamp Duty', 'MGT-14'],
                 'cms_content' => ['hero' => ['title' => 'Increase Capital', 'subtitle' => 'Issue more shares.', 'badge' => 'Growth'], 'benefits' => [['title' => 'Funding', 'desc' => 'Raise investment.']], 'process' => [['step' => 1, 'title' => 'File', 'desc' => 'SH-7 form.']], 'documents' => ['Resolution', 'MOA']]
            ],
            [
                'name' => 'Share Transfer',
                'slug' => 'share-transfer',
                'description' => 'Transfer shares between shareholders.',
                'price' => 1999.00,
                'icon_url' => null,
                'category' => 'MCA',
                'features' => ['Share Transfer Deed', 'Stamp Duty', 'Board Resolution'],
                 'cms_content' => ['hero' => ['title' => 'Share Transfer', 'subtitle' => 'Change ownership.', 'badge' => 'Equity'], 'benefits' => [['title' => 'Record', 'desc' => 'Legal transfer.']], 'process' => [['step' => 1, 'title' => 'Deed', 'desc' => 'SH-4 form.']], 'documents' => ['Share Certificate', 'SH-4']]
            ],
            [
                'name' => 'Demat of Shares',
                'slug' => 'demat-of-shares',
                'description' => 'Convert physical shares to demat.',
                'price' => 5999.00,
                'icon_url' => null,
                'category' => 'MCA',
                'features' => ['ISIN Generation', 'RTA Coordination', 'Dematerialization'],
                 'cms_content' => ['hero' => ['title' => 'Demat Shares', 'subtitle' => 'Go digital.', 'badge' => 'Demat'], 'benefits' => [['title' => 'Mandatory', 'desc' => 'For pvt ltd companies.']], 'process' => [['step' => 1, 'title' => 'ISIN', 'desc' => 'Get ISIN.']], 'documents' => ['MOA/AOA', 'PAN']]
            ],
            [
                'name' => 'Winding Up - LLP',
                'slug' => 'winding-up-llp',
                'description' => 'Closure of Limited Liability Partnership.',
                'price' => 7999.00,
                'icon_url' => null,
                'category' => 'MCA',
                'features' => ['Form 24 Filing', 'Consent of Partners', 'Affidavits'],
                 'cms_content' => ['hero' => ['title' => 'Close LLP', 'subtitle' => 'Winding up LLP.', 'badge' => 'Closure'], 'benefits' => [['title' => 'Exit', 'desc' => 'Formal closure.']], 'process' => [['step' => 1, 'title' => 'Apply', 'desc' => 'Form 24.']], 'documents' => ['Affidavit', 'Assets Report']]
            ],
            [
                'name' => 'Winding Up - Company',
                'slug' => 'winding-up-company',
                'description' => 'Strike off company name (STK-2).',
                'price' => 9999.00,
                'icon_url' => null,
                'category' => 'MCA',
                'features' => ['STK-2 Filing', 'NOC', 'Closure'],
                 'cms_content' => ['hero' => ['title' => 'Close Company', 'subtitle' => 'Legally exit business.', 'badge' => 'Closure'], 'benefits' => [['title' => 'Clean Slate', 'desc' => 'No more compliance.']], 'process' => [['step' => 1, 'title' => 'File', 'desc' => 'STK-2 Application.']], 'documents' => ['Indemnity Bond', 'Accounts']]
            ],
             [
                'name' => 'Commencement (INC-20A)',
                'slug' => 'commencement-inc-20a',
                'description' => 'Declaration of commencement of business.',
                'price' => 1499.00,
                'icon_url' => null,
                'category' => 'MCA',
                'features' => ['INC-20A Filing', 'Bank Statement', 'Penalty Avoidance'],
                 'cms_content' => ['hero' => ['title' => 'Business Commencement', 'subtitle' => 'INC-20A Filing.', 'badge' => 'Mandatory'], 'benefits' => [['title' => 'Start', 'desc' => 'Start operations.']], 'process' => [['step' => 1, 'title' => 'Deposit', 'desc' => 'Share capital in bank.']], 'documents' => ['Bank Statement', 'Photo']]
            ],

            // Compliance
            [
                'name' => 'FDI Filing with RBI',
                'slug' => 'fdi-filing-rbi',
                'description' => 'FC-GPR filing for foreign investment.',
                'price' => 9999.00,
                'icon_url' => null,
                'category' => 'Compliance',
                'features' => ['FC-GPR', 'SMF Portal', 'RBI Reporting'],
                 'cms_content' => ['hero' => ['title' => 'FDI Filing', 'subtitle' => 'Report Foreign Investment.', 'badge' => 'FEMA'], 'benefits' => [['title' => 'Usage', 'desc' => 'Use foreign funds.']], 'process' => [['step' => 1, 'title' => 'Report', 'desc' => 'FIRMS portal.']], 'documents' => ['FIRC', 'KYC']]
            ],
             [
                'name' => 'FLA Return Filing',
                'slug' => 'fla-return-filing',
                'description' => 'Annual return on Foreign Liabilities and Assets.',
                'price' => 4999.00,
                'icon_url' => null,
                'category' => 'Compliance',
                'features' => ['FLA Return', 'Annual Filing', 'RBI Compliance'],
                 'cms_content' => ['hero' => ['title' => 'FLA Return', 'subtitle' => 'Annual FDI return.', 'badge' => 'Annual'], 'benefits' => [['title' => 'Compliance', 'desc' => 'Avoid penalty.']], 'process' => [['step' => 1, 'title' => 'File', 'desc' => 'July 15 deadline.']], 'documents' => ['Financials', 'Shareholding']]
            ],
            [
                'name' => 'FSSAI Renewal',
                'slug' => 'fssai-renewal',
                'description' => 'Renew your Food License.',
                'price' => 1999.00,
                'icon_url' => null,
                'category' => 'Compliance',
                'features' => ['Online Application', 'Validity Extension', 'License Update'],
                 'cms_content' => ['hero' => ['title' => 'FSSAI Renewal', 'subtitle' => 'Keep license active.', 'badge' => 'Renewal'], 'benefits' => [['title' => 'Continue', 'desc' => 'Continue business.']], 'process' => [['step' => 1, 'title' => 'Renew', 'desc' => 'Before expiry.']], 'documents' => ['Old License', 'Audit Report']]
            ],
            [
                'name' => 'FSSAI Return Filing',
                'slug' => 'fssai-return-filing',
                'description' => 'Annual return for food business operators.',
                'price' => 2499.00,
                'icon_url' => null,
                'category' => 'Compliance',
                'features' => ['Form D1', 'Annual Turnover', 'Compliance'],
                 'cms_content' => ['hero' => ['title' => 'FSSAI Return', 'subtitle' => 'Annual food return.', 'badge' => 'Compliance'], 'benefits' => [['title' => 'Report', 'desc' => 'Mandatory filing.']], 'process' => [['step' => 1, 'title' => 'File', 'desc' => 'By May 31st.']], 'documents' => ['Sales Data', 'Production Data']]
            ],
            [
                'name' => 'Partnership Compliance',
                'slug' => 'partnership-compliance',
                'description' => 'Annual compliance for partnership firms.',
                'price' => 4999.00,
                'icon_url' => null,
                'category' => 'Compliance',
                'features' => ['ITR-5', 'Financial Statement', 'Tax Audit'],
                 'cms_content' => ['hero' => ['title' => 'Partnership Compliance', 'subtitle' => 'Keep firm compliant.', 'badge' => 'Annual'], 'benefits' => [['title' => 'Clean', 'desc' => 'Audit ready.']], 'process' => [['step' => 1, 'title' => 'Account', 'desc' => 'Finalize books.']], 'documents' => ['Bank Statement', 'Invoices']]
            ],
            [
                'name' => 'Proprietorship Compliance',
                'slug' => 'proprietorship-compliance',
                'description' => 'Annual compliance for sole proprietorships.',
                'price' => 2999.00,
                'icon_url' => null,
                'category' => 'Compliance',
                'features' => ['ITR Filing', 'GST Return', 'Bookkeeping'],
                 'cms_content' => ['hero' => ['title' => 'Proprietorship Compliance', 'subtitle' => 'Sole owner compliance.', 'badge' => 'Business'], 'benefits' => [['title' => 'Easy', 'desc' => 'All in one.']], 'process' => [['step' => 1, 'title' => 'File', 'desc' => 'Timely returns.']], 'documents' => ['Bank Statement', 'GST']]
            ],
            [
                'name' => 'Business Plan',
                'slug' => 'business-plan',
                'description' => 'Professional business plan for startups and loans.',
                'price' => 9999.00,
                'icon_url' => null,
                'category' => 'Compliance',
                'features' => ['Market Research', 'Financial Projections', 'Executive Summary'],
                 'cms_content' => ['hero' => ['title' => 'Business Plan', 'subtitle' => 'Roadmap to success.', 'badge' => 'Strategy'], 'benefits' => [['title' => 'Funding', 'desc' => 'Investor ready.']], 'process' => [['step' => 1, 'title' => 'Draft', 'desc' => 'Consultation.']], 'documents' => ['Ideas', 'Data']]
            ],
            [
                'name' => 'Bookkeeping',
                'slug' => 'bookkeeping',
                'description' => 'Monthly accounting and bookkeeping services.',
                'price' => 2999.00,
                'icon_url' => null,
                'category' => 'Compliance',
                'features' => ['Tally / Zoho Books', 'Monthly Reports', 'GST Reconciliation'],
                 'cms_content' => ['hero' => ['title' => 'Bookkeeping', 'subtitle' => 'Managed accounting.', 'badge' => 'Monthly'], 'benefits' => [['title' => 'Insight', 'desc' => 'Financial health.']], 'process' => [['step' => 1, 'title' => 'Record', 'desc' => 'Daily entry.']], 'documents' => ['Invoices', 'Bills']]
            ],
            [
                'name' => 'HR & Payroll',
                'slug' => 'hr-and-payroll',
                'description' => 'Complete HR and Payroll solution.',
                'price' => 4999.00,
                'icon_url' => null,
                'category' => 'Compliance',
                'features' => ['Offer Letters', 'Payslips', 'Policy Drafting'],
                 'cms_content' => ['hero' => ['title' => 'HR & Payroll', 'subtitle' => 'Manage employees.', 'badge' => 'HR'], 'benefits' => [['title' => 'Professional', 'desc' => 'Employee satisfaction.']], 'process' => [['step' => 1, 'title' => 'Onboard', 'desc' => 'New joiners.']], 'documents' => ['Employee Details']]
            ],
             [
                'name' => 'CA Support',
                'slug' => 'ca-support',
                'description' => 'On-demand consultation with a Chartered Accountant.',
                'price' => 999.00,
                'icon_url' => null,
                'category' => 'Compliance',
                'features' => ['Tax Advisory', 'Business Structure', 'Financial Planning'],
                 'cms_content' => ['hero' => ['title' => 'CA Support', 'subtitle' => 'Expert advice.', 'badge' => 'Consult'], 'benefits' => [['title' => 'Clarity', 'desc' => 'Clear doubts.']], 'process' => [['step' => 1, 'title' => 'Call', 'desc' => 'Book slot.']], 'documents' => ['Queries']]
            ],
            [
                'name' => 'PF Return Filing',
                'slug' => 'pf-return-filing',
                'description' => 'Monthly EPF return filing.',
                'price' => 999.00,
                'icon_url' => null,
                'category' => 'Compliance',
                'features' => ['ECR Generation', 'Challan', 'Employee Updates'],
                 'cms_content' => ['hero' => ['title' => 'PF Return', 'subtitle' => 'Provident Fund filing.', 'badge' => 'Monthly'], 'benefits' => [['title' => 'Social Security', 'desc' => 'Employee benefit.']], 'process' => [['step' => 1, 'title' => 'File', 'desc' => 'PF portal.']], 'documents' => ['Wage Data']]
            ],
            [
                'name' => 'ESI Return Filing',
                'slug' => 'esi-return-filing',
                'description' => 'Monthly ESI return filing.',
                'price' => 999.00,
                'icon_url' => null,
                'category' => 'Compliance',
                'features' => ['Contribution filing', 'Challan', 'Insurance'],
                 'cms_content' => ['hero' => ['title' => 'ESI Return', 'subtitle' => 'Employee State Insurance.', 'badge' => 'Monthly'], 'benefits' => [['title' => 'Health', 'desc' => 'Employee health.']], 'process' => [['step' => 1, 'title' => 'File', 'desc' => 'ESIC portal.']], 'documents' => ['Wage Data']]
            ],
             [
                'name' => 'Professional Tax Return Filing',
                'slug' => 'professional-tax-return-filing',
                'description' => 'State-wise Professional Tax compliance.',
                'price' => 999.00,
                'icon_url' => null,
                'category' => 'Compliance',
                'features' => ['PT Filing', 'Challan Payment', 'Annual Return'],
                 'cms_content' => ['hero' => ['title' => 'Professional Tax', 'subtitle' => 'State tax filing.', 'badge' => 'State'], 'benefits' => [['title' => 'Local Law', 'desc' => 'Compliance.']], 'process' => [['step' => 1, 'title' => 'File', 'desc' => 'State portal.']], 'documents' => ['Wage Data']]
            ],
             [
                'name' => 'ROC Search Report',
                'slug' => 'roc-search-report',
                'description' => 'Detailed report of company records from ROC.',
                'price' => 1999.00,
                'icon_url' => null,
                'category' => 'Compliance',
                'features' => ['Public Documents', 'Charge Details', 'Director Details'],
                 'cms_content' => ['hero' => ['title' => 'Search Report', 'subtitle' => 'Due diligence.', 'badge' => 'Insight'], 'benefits' => [['title' => 'Verify', 'desc' => 'Verify details.']], 'process' => [['step' => 1, 'title' => 'Search', 'desc' => 'MCA portal.']], 'documents' => ['Company Name']]
            ],

            // Global
            [
                'name' => 'UAE Company Registration',
                'slug' => 'uae-company-registration',
                'description' => 'Start your business in the UAE. 100% foreign ownership allowed.',
                'price' => 24999.00,
                'icon_url' => null,
                'category' => 'Global',
                'features' => ['Trade License', 'Visa Assistance', 'Corporate Bank Account'],
                'cms_content' => ['hero' => ['title' => 'UAE Company Registration', 'subtitle' => 'Expand to the Middle East.', 'badge' => 'Global'], 'benefits' => [['title' => 'Tax Free', 'desc' => 'Time to grow.']], 'process' => [['step' => 1, 'title' => 'Consult', 'desc' => 'Free consultation.']], 'documents' => ['Passport', 'Photo']]
            ],
            [
                'name' => 'USA Company Registration',
                'slug' => 'usa-company-registration',
                'description' => 'Incorporate a C-Corp or LLC in Delaware or Wyoming.',
                'price' => 29999.00,
                'icon_url' => null,
                'category' => 'Global',
                'features' => ['Certificate of Incorporation', 'EIN (Tax ID)', 'Registered Agent'],
                'cms_content' => ['hero' => ['title' => 'USA Company Registration', 'subtitle' => 'Launch in the USA.', 'badge' => 'Global'], 'benefits' => [['title' => 'Global Reach', 'desc' => 'Access US market.']], 'process' => [['step' => 1, 'title' => 'Apply', 'desc' => 'Select state.']], 'documents' => ['Passport', 'Address Proof']]
            ],
            [
                'name' => 'Singapore Company Registration',
                'slug' => 'singapore-company-registration',
                'description' => 'Register your scalable startup in Singapore.',
                'price' => 49999.00,
                'icon_url' => null,
                'category' => 'Global',
                'features' => ['ACRA Registration', 'Corporate Secretary', 'Local Address'],
                'cms_content' => ['hero' => ['title' => 'Singapore Company', 'subtitle' => 'Asian business hub.', 'badge' => 'Asia'], 'benefits' => [['title' => 'Tax', 'desc' => 'Low tax rates.']], 'process' => [['step' => 1, 'title' => 'ACRA', 'desc' => 'Name approval.']], 'documents' => ['Passport', 'Resume']]
            ],
            [
                'name' => 'UK Company Registration',
                'slug' => 'uk-company-registration',
                'description' => 'Set up a Limited Company in the United Kingdom.',
                'price' => 14999.00,
                'icon_url' => null,
                'category' => 'Global',
                'features' => ['Companies House Filing', 'Registered Office', 'Share Certificates'],
                'cms_content' => ['hero' => ['title' => 'UK Company Registration', 'subtitle' => 'Business in Europe.', 'badge' => 'Global'], 'benefits' => [['title' => 'Prestige', 'desc' => 'Global recognition.']], 'process' => [['step' => 1, 'title' => 'Form', 'desc' => 'Fill details.']], 'documents' => ['ID Proof', 'Address Proof']]
            ],
            [
                'name' => 'USA Trademark Registration',
                'slug' => 'usa-trademark',
                'description' => 'Protect your brand in the United States via USPTO.',
                'price' => 34999.00,
                'icon_url' => null,
                'category' => 'Global',
                'features' => ['USPTO Search', 'Application Filing', 'Response to Office Actions'],
                'cms_content' => ['hero' => ['title' => 'USA Trademark', 'subtitle' => 'Protect brand in US.', 'badge' => 'IP Rights'], 'benefits' => [['title' => 'Protection', 'desc' => 'US Market.']], 'process' => [['step' => 1, 'title' => 'Search', 'desc' => 'USPTO search.']], 'documents' => ['Logo', 'Entity Details']]
            ],
            [
                'name' => 'International Trademark',
                'slug' => 'international-trademark',
                'description' => 'Protect your brand globally under the Madrid Protocol.',
                'price' => 44999.00,
                'icon_url' => null,
                'category' => 'Global',
                'features' => ['WIPO Filing', 'Designated Countries', 'Global Protection'],
                'cms_content' => ['hero' => ['title' => 'International Trademark', 'subtitle' => 'Global brand protection.', 'badge' => 'WIPO'], 'benefits' => [['title' => 'Global', 'desc' => 'Multiple countries.']], 'process' => [['step' => 1, 'title' => 'Apply', 'desc' => 'Madrid Protocol.']], 'documents' => ['Basic Mark', 'List of Countries']]
            ],
            [
                'name' => 'UAE eCommerce License',
                'slug' => 'uae-ecommerce',
                'description' => 'Start an online business in UAE with an eCommerce license.',
                'price' => 19999.00,
                'icon_url' => null,
                'category' => 'Global',
                'features' => ['E-Trader License', 'Payment Gateway Support', 'Visa'],
                'cms_content' => ['hero' => ['title' => 'UAE eCommerce', 'subtitle' => 'Sell online in UAE.', 'badge' => 'Digital'], 'benefits' => [['title' => 'Online', 'desc' => 'Digital business.']], 'process' => [['step' => 1, 'title' => 'License', 'desc' => 'Get license.']], 'documents' => ['Passport', 'Visa Copy']]
            ],
            [
                'name' => 'UAE Embassy Attestation',
                'slug' => 'uae-embassy-attestation',
                'description' => 'Attest your documents for use in the UAE.',
                'price' => 4999.00,
                'icon_url' => null,
                'category' => 'Global',
                'features' => ['MEA Attestation', 'UAE Embassy Legalization', 'Courier'],
                'cms_content' => ['hero' => ['title' => 'Embassy Attestation', 'subtitle' => 'Document legalization.', 'badge' => 'Legal'], 'benefits' => [['title' => 'Valid', 'desc' => 'UAE accepted.']], 'process' => [['step' => 1, 'title' => 'Submit', 'desc' => 'Send docs.']], 'documents' => ['Original Certificate', 'Passport Copy']]
            ],
            [
                'name' => 'Ajman Free Zone',
                'slug' => 'ajman-free-zone',
                'description' => 'Cost-effective free zone setup in UAE.',
                'price' => 18999.00,
                'icon_url' => null,
                'category' => 'Global',
                'features' => ['License', 'Smart Office', 'Visa Allocation'],
                'cms_content' => ['hero' => ['title' => 'Ajman Free Zone', 'subtitle' => 'Low cost setup.', 'badge' => 'Free Zone'], 'benefits' => [['title' => 'Cheap', 'desc' => 'Budget friendly.']], 'process' => [['step' => 1, 'title' => 'Apply', 'desc' => 'Select package.']], 'documents' => ['Passport', 'Photo']]
            ],
            [
                'name' => 'UAQ Free Zone',
                'slug' => 'uaq-free-zone',
                'description' => 'Umm Al Quwain Free Zone authority registration.',
                'price' => 17999.00,
                'icon_url' => null,
                'category' => 'Global',
                'features' => ['License', 'Micro Business', 'freelancer Permit'],
                 'cms_content' => ['hero' => ['title' => 'UAQ Free Zone', 'subtitle' => 'Modern free zone.', 'badge' => 'Startup'], 'benefits' => [['title' => 'Fast', 'desc' => 'Quick setup.']], 'process' => [['step' => 1, 'title' => 'Register', 'desc' => 'Online process.']], 'documents' => ['Passport', 'Visa']]
            ],
        ];

        foreach ($services as $service) {
            Service::updateOrCreate(['slug' => $service['slug']], $service);
        }
    }
}
