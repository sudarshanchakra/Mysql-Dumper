# MySQL Dumper

MySQL Dumper is a simple PHP script that allows you to quickly and easily back up your MySQL database or specific tables. It provides a user-friendly web interface to create backups, making it a convenient tool for developers and system administrators.

## Features

- Backup your entire MySQL database or specific tables.
- Securely store your database credentials.
- Easily configure and customize the backup file naming.
- Get detailed output messages for each backup operation.
- Ensure the safety of your backups with user-defined file names.
- Error handling and notifications for successful and failed backups.
- Open-source and customizable for your specific needs.

## Getting Started

1. Clone the repository to your web server:

   ```shell
   git clone https://github.com/your-username/mysql-dumper.git
   ```

2. Configure your MySQL database credentials by editing the `config.php` file.

   ```php
   // config.php

   $host = "localhost";
   $user = "your-mysql-username";
   $pass = "your-mysql-password";
   $database = "your-database-name";
   ```

3. Upload the `mysql-dumper` folder to your web server.

4. Access the MySQL Dumper web interface in your browser:

   ```
   http://your-domain.com/mysql-dumper/index.php
   ```

## Usage

1. Enter your MySQL database credentials in the `config.php` file.
2. Access the MySQL Dumper web interface in your browser.
3. Choose to back up the entire database or specific tables by providing the table name.
4. Click the "Backup" button to initiate the backup process.
5. The backup file will be created and stored in the `mysql-dumper` directory.

## Security Considerations

- Protect the `config.php` file and your database credentials. Do not expose them in the web root.
- Use strong, unique passwords for your MySQL database.
- Regularly check and update the script to the latest version for security improvements.

## Contributions

We welcome contributions to MySQL Dumper. If you find issues, have ideas for enhancements, or want to improve the project, please open an issue or create a pull request.

## License

This project is licensed under the [MIT License](LICENSE).
