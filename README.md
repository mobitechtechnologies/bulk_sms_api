# Mobitech Bulk SMS API
Mobitech bulk sms API guide and code snippets

Send a message to a mobile subscriber using a Sender Name (alphanumeric sender ID):

https://api.mobitechtechnologies.com/sms/sendsms

**Request Type**
- POST

## Parameters

| Field | #Type | #Descriptions |
| :---: | :---: | :---: |
| h_api_key | String | Your API key. It goes to the header |
|mobile  |String  | The customer mobile number. This can be any format e.g. 722xxxyyy, 0722xxxyyy, +254 722xxx yyy |
| response_type |String  |[Optional, defaults to json] either json or plain|
| sender_name | String | 	The origination alphanumeric or numeric code. e.g. MobiTech for bulk messages or 12345 for shortcode messages |
| service_id | String | An identifier of the service allocated to the customer. This is always 0 for bulk messaging|
| link_id | String |[Optional] Leave this empty for bulk messages. For shortcode messages, the link_id received on incoming on-demand messages must be included here. |
| message | String | The message to send to the end user. This can be to a maximum or 920 characters or 6 SMS units. Note that every unit of an SMS is charged. |

## Response codes
|Status Id|	Status Code	Status| Description|
| :---: | :---: | :---: |
|1|	1000	|Success|
|2|	1001|	Invalid short code|
|3|	1002	|Network not allowed|
|4|	1003	|Invalid mobile number|
|5|	1004	|Low bulk credits|
|6|	1005	|Internal system error|
|7|	1006	|Invalid credentials|
|8|	1007	|Db connection failed|
|9|	   1008	|Db selection failed|
|10|	1009|	Data type not supported|
|11|	1010|	Request type not supported|
|12|	1011|	Invalid user state or account suspended|
|13|	1012|	Mobile number in DND|
|14|	1013|	Invalid API Key|
|15|	1014|	IP not allowed|
