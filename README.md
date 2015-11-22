# Flash Message

This is a simple library which has two static methods allowing you to get/set flash data or messages.

Coded by Joel Vardy.

Reformer by Phitsanu AP Chuamuangphan

## Installation

Add the following to your `composer.json` require object:

```json
"appotter/flash-message": "~1.0"
```

## Usage

### Data

Set data upon failure.

```php
Flash::data([
	'username' => $username,
	'email'    => $email
]);
```

Read data to display on the front end:

```php
$data = Flash::data();
```

### Messages

Set an error message:

```php
Flash::message('error', 'You must enter a valid email address.');
```

Read all flash messages:

```php
$messages = Flash::message();
```