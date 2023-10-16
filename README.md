Symfony test for candidate

GET request for price calculating

http://localhost:8000/api/v1/product/calculate

json body:

{
"product_id": 1,
"taxNumber": "DE123456789",
"couponCode": "D15"
}

json response:

200 OK
{
"price": 1003.44
}
