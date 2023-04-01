import requests
import json

url = "https://api.mobitechtechnologies.com/sms/sendsms"

# Sample JSON data
data = {
    "mobile": "254702XXXXX",
    "response_type": "json",
    "sender_name": "23107",
    "service_id": 0,
    "message": "This is a message.\n\nRegards\nMobiTech Technologies"
}

# Convert data to JSON format
json_data = json.dumps(data)

# Set the content type header
headers = {
    'Content-type': 'application/json',
    'h_api_key':'YOUR_API_KEY'}

# Make the request
response = requests.post(url, data=json_data, headers=headers)

# Check the response status code
if response.status_code == requests.codes.ok:
    # Parse the JSON data
    parsed_response = json.loads(response.content)

    # Access the data
    for item in parsed_response:
        print(f"Status code:", item["status_code"])
        print(f"Status description:", item["status_desc"])
        print(f"Message ID:", item["message_id"])
        print(f"Mobile number:", item["mobile_number"])
        print(f"Network ID:", item["network_id"])
        print(f"Message cost:", item["message_cost"])
        print(f"Credit balance:", item["credit_balance"])
else:
    print("Request failed")
