
# ToDo

A simple ToDo application backend with API.


## Features

- Lightweight API
- Built with Laravel
- Works with any frontend
- Easy to Deploy & Contribute.

## Installation

Install ToDo Application with Composer

```bash
  git clone https://github.com/shishamchudal/Todo.git
  cd ToDo
  composer install
  npm install && npm run dev
  laravel serve
  php artisan key:generate
```
    
## Environment Variables

To run this project, you will need to add the following environment variables to your .env file

`DB_CONNECTION`\
`DB_HOST`\
`DB_PORT`\
`DB_DATABASE`\
`DB_USERNAME`\
`DB_PASSWORD`


## API Reference

#### Get all Items

```http
  GET /api/items
```

#### Create item

```http
  POST /api/items
```

| Parameter | Type     | Description                       |
| :-------- | :------- | :-------------------------------- |
| `name`      | `string` | **Required**. Name for the ToDo Item. |

#### Get single item

```http
  GET /api/items/{item}
```

| Parameter | Type     | Description                       |
| :-------- | :------- | :-------------------------------- |
| `item`      | `numeric` | **Required**. Id of item to fetch |

#### Update an item

```http
  PATCH|PUT /api/items/{item}
```

| Parameter | Type     | Description                       |
| :-------- | :------- | :-------------------------------- |
| `item`      | `numeric` | **Required**. Id of the item to be updated. |

#### Delete an item

```http
  DELETE /api/items/{item}
```

| Parameter | Type     | Description                       |
| :-------- | :------- | :-------------------------------- |
| `item`      | `numeric` | **Required**. Id of the item to be deleted. |


## Running Tests

To run tests, run the following command

```bash
  php artisan test
```


## Contributing

Contributions are always welcome!

See `contributing.md` for ways to get started.

Please adhere to this project's `code of conduct`.


## License

[MIT](https://choosealicense.com/licenses/mit/)


## Authors

- [@shishamchudal](https://www.github.com/shishamchudal)


## 🚀 About the Author

I am a full stack web developer based on the Capital of Nepal, Kathmandu. Currently learning VueJs.

