import easyocr
import sys
import json
import os
import re

def extract_data(image_path):
    if not os.path.exists(image_path):
        return {"error": "File not found"}

    try:
        reader = easyocr.Reader(['en'])
        result = reader.readtext(image_path, detail=0)
        
        full_text = " ".join(result)
        
        # Basic patterns for PAN and Aadhar
        data = {
            "raw_text": full_text,
            "pan_number": None,
            "aadhar_number": None,
            "dob": None,
            "name": None
        }

        # PAN Pattern: 5 letters, 4 digits, 1 letter
        pan_match = re.search(r'[A-Z]{5}[0-9]{4}[A-Z]{1}', full_text.upper())
        if pan_match:
            data["pan_number"] = pan_match.group()

        # Aadhar Pattern: 12 digits (often spaced 4-4-4)
        aadhar_match = re.search(r'[0-9]{4}\s?[0-9]{4}\s?[0-9]{4}', full_text)
        if aadhar_match:
            data["aadhar_number"] = aadhar_match.group().replace(" ", "")

        # DOB Pattern: DD/MM/YYYY or DD-MM-YYYY
        dob_match = re.search(r'\d{2}/\d{2}/\d{4}|\d{2}-\d{2}-\d{4}', full_text)
        if dob_match:
            data["dob"] = dob_match.group()

        return data
    except Exception as e:
        return {"error": str(e)}

if __name__ == "__main__":
    if len(sys.argv) < 2:
        print(json.dumps({"error": "No image path provided"}))
        sys.exit(1)
    
    image_path = sys.argv[1]
    result = extract_data(image_path)
    print(json.dumps(result))
