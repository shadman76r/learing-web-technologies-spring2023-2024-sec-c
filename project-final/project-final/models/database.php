<?php

$db = [
  "host" => "localhost",
  "user" => "root",
  "passwd" => "",
  "database" => "opencrowd"
];


function getDatabaseConnection()
{
  $db = $GLOBALS['db'];
  $conn = mysqli_connect($db['host'], $db['user'], $db['passwd'], $db['database']);
  if (!$conn) {
    die("Failed to connecto to the database!");
  }
  return $conn;
}

/*
CREATE TABLE users (
  	`id` INT PRIMARY KEY AUTO_INCREMENT,
    `name` VARCHAR(155) NOT NULL,
    `email` VARCHAR(255) NOT NULL UNIQUE,
    `username` VARCHAR(155) NOT NULL UNIQUE,
    `password` VARCHAR(255) NOT NULL,
    `org` VARCHAR(155),
    `role` VARCHAR(50),
    `gender` VARCHAR(20) NOT NULL,
    `dob` DATE NOT NULL,
    `type` VARCHAR(20) NOT NULL
)
ENGINE InnoDB;

CREATE TABLE `opencrowd`.`comments` (
    `id` INT NOT NULL PRIMARY KEY AUTO_INCREMENT, 
    `parent_id` INT NOT NULL,
    `comment` TEXT NOT NULL, 
    `sender` VARCHAR(155) NOT NULL, 
    `date` DATE NOT NULL
) ENGINE = InnoDB;

CREATE TABLE `opencrowd`.`products` (
    `id` INT NOT NULL PRIMARY KEY AUTO_INCREMENT, 
    `name` VARCHAR(255) NOT NULL, 
    `description` TEXT NOT NULL, 
    `category` VARCHAR(155) NOT NULL,
    `url` VARCHAR(255) NOT NULL,
    `img` VARCHAR(255) NOT NULL, 
    `votes` INT NOT NULL,
    `launch_date` DATE NOT NULL,
    `published_by` VARCHAR(155) NOT NULL
) ENGINE = InnoDB;

USE opencrowd;

INSERT INTO products (name, description, category, url, img, votes, launch_date) VALUES
('Marvin', 'Auto-fill Stripe''s test card and payment info extension. Marvin is an extension for bsrowsers to auto-fill the Stripes Test Card and payment info. Save time of typing ''4242'' tons of times while developing and debugging your website with Stripe payments.', 'AI', 'https://marvinbot.com/', 'https://ph-files.imgix.net/03fa9f64-1f52-4494-bd90-de26935e8cde.png?auto=compress&codec=mozjpeg&cs=strip&auto=format&w=72&h=72&fit=crop&dpr=1', 100, '2024-02-12', 'sadman06');

INSERT INTO products (name, description, category, url, img, votes, launch_date) VALUES
('Styler', 'Create professional logos and text effects tailored to your brand identity with Stylar AI. Whether generating logos from ideas or sketches, or transforming your brand logos into creative visuals for marketing, Stylar provides an all-in-one solution for you.', 'AI', 'https://www.stylar.ai/', 'https://ph-files.imgix.net/8267d476-c2ac-4024-a3ca-75c5039a9b6a.jpeg?auto=compress&codec=mozjpeg&cs=strip&auto=format&w=72&h=72&fit=crop&dpr=1', 200, '2024-01-13', 'lamia01');

INSERT INTO products (name, description, category, url, img, votes, launch_date) VALUES
('RedotPay', 'RedotPay offers a cryptocurrency-linked credit card, enabling users to spend crypto as fiat currency worldwide. It supports major cryptocurrencies and provides advanced security with dedicated blockchain addresses and compliance with AML and eKYC regulations.', 'Business', 'https://www.producthunt.com/r/7DYQNHKZQZTCYB', 'https://ph-files.imgix.net/0e4b525f-dd76-4c51-9ca8-74dcab28f58d.png?auto=compress&codec=mozjpeg&cs=strip&auto=format&w=72&h=72&fit=crop&dpr=1', 550, '2023-05-14', 'toufiq7');

*/