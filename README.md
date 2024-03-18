# Certificate Project

This Project designed to generate User Certificate

* [Certificate Form](#certificate-form)
* [Certificate Page](#certificate-page)
* [Database](#database)

## Certificate Form

That is the Page for get the certificate data (name, course, and image)

<p align="center">
  <img src="IMAGES/img.png" alt="Certificate form" width="750">
</p>


## Certificate Page

That is the Page for showing the certificate 

<p align="center">
  <img src="IMAGES/img_1.png" alt="Certificate form" width="550">
</p>


## Database
Database name is: <code>certificate_project</code>
<br>
<br>
<code>
<strong>CREATE TABLE</strong> `certificates`<br>
(<br>
    `id`   int primary key not null auto_increment,<br>
    `path` varchar(200)    not null,<br>
    `name` varchar(100)    not null,<br>
    `img`  varchar(200)    not null<br>
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
</code>