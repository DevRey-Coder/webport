# APP

## Post ( Login )
```
http://127.0.0.1:8000/api/v1/login
```

|**Request** Header |              |
|-------------------|--------------|
| Accept            | application/json |


--------------------


|Body `formdata`     |                 |
|--------------------|-----------------|
| email              |amt@gmail.com    |
| password           | asdffdsa        |

## Post ( Logout )
```
http://127.0.0.1:8000/api/v1/logout
```

## Post ( Logout All)
```
http://127.0.0.1:8000/api/v1/logout-all
```

|Authenticatiom (Bearer Toaken)     |                 |
|--------------------|-----------------|
| Token              |`<token>`        |
