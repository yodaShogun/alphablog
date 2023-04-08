-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : dim. 09 avr. 2023 à 01:50
-- Version du serveur : 10.4.25-MariaDB
-- Version de PHP : 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `academyblog`
--

-- --------------------------------------------------------

--
-- Structure de la table `articles`
--

CREATE TABLE `articles` (
  `article` int(11) NOT NULL,
  `category` int(11) NOT NULL,
  `cover` varchar(255) NOT NULL,
  `manager` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `preview` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `publish_date` datetime NOT NULL DEFAULT current_timestamp(),
  `actived` tinyint(4) NOT NULL DEFAULT 0,
  `deleted` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `articles`
--

INSERT INTO `articles` (`article`, `category`, `cover`, `manager`, `title`, `preview`, `content`, `publish_date`, `actived`, `deleted`) VALUES
(3, 5, '', 1, 'How to Upload Files with JavaScript', 'In this tutorial, I want to show you how to do the same thing with JavaScript to avoid the page refresh. That way, you can have the same functionality, but with better user experience.', 'How to Set Up an Event Handler\nLet&#039;s say you have an HTML form that looks like this:\n\n&lt;form action=&quot;/api&quot; method=&quot;post&quot; enctype=&quot;multipart/form-data&quot;&gt;\n  &lt;label for=&quot;file&quot;&gt;File&lt;/label&gt;\n  &lt;input id=&quot;file&quot; name=&quot;file&quot; type=&quot;file&quot; /&gt;\n  &lt;button&gt;Upload&lt;/button&gt;\n&lt;/form&gt;\nWith HTML, to access a file on the user’s device, we have to use an &lt;input&gt; with the “file” type. And in order to create the HTTP request to upload the file, we have to use a &lt;form&gt; element.\n\nWhen dealing with JavaScript, the first part is still true. We still need the file input to access the files on the device. But browsers have a Fetch API that we can use to make HTTP requests without forms.\n\nI still like to include a form because:\n\nProgressive enhancement: If JavaScript fails for whatever reason, the HTML form will still work.\nI’m lazy: The form will actually make my work easier later on, as we’ll see.\nWith that in mind, for JavaScript to submit this form, I’ll set up a “submit” event handler.\n\nconst form = document.querySelector(&#039;form&#039;);\nform.addEventListener(&#039;submit&#039;, handleSubmit);\n\n/** @param {Event} event */\nfunction handleSubmit(event) {\n  // The rest of the logic will go here.\n}\nThroughout the rest of this article, we’ll only be looking at the logic within the event handler function, handleSubmit.\n\nHow to Prepare the HTTP Request\nThe first thing I need to do in this submit handler is call the event’s preventDefault method to stop the browser from reloading the page to submit the form. I like to put this at the end of the event handler so that if there is an exception thrown within the body of this function, preventDefault will not be called, and the browser will fall back to the default behavior.\n\n/** @param {Event} event */\nfunction handleSubmit(event) {\n  // Any JS that could fail goes here\n  event.preventDefault();\n}\nNext, we’ll want to construct the HTTP request using the Fetch API. The Fetch API expects the first argument to be a URL, and a second, optional argument as an Object.\n\nWe can get the URL from the form’s action property. It’s available on any form DOM node which we can access using the event’s currentTarget property. If the action is not defined in the HTML, it will default to the browser’s current URL.\n\n/** @param {Event} event */\nfunction handleSubmit(event) {\n  const form = event.currentTarget;\n  const url = new URL(form.action);\n\n  fetch(url);\n\n  event.preventDefault();\n}\nRelying on the HTML to define the URL makes it more declarative, keeps our event handler reusable, and our JavaScript bundles smaller. It also maintains functionality if the JavaScript fails.\n\nBy default, Fetch sends HTTP requests using the GET method, but to upload a file, we need to use a POST method. We can change the method using fetch‘s optional second argument. I’ll create a variable for that object and assign the method property, but once again, I’ll grab the value from the form’s method attribute in the HTML.\n\nconst url = new URL(form.action);\n\n/** @type {Parameters&lt;fetch&gt;[1]} */\nconst fetchOptions = {\n  method: form.method,\n};\n\nfetch(url, fetchOptions);\nNow the only missing piece is actually including the payload in the body of the request.\n\nHow to Add the Request Body\nIf you’ve ever created a Fetch request in the past, you may have included the body as a JSON string or a URLSearchParams object. Unfortunately, neither of those will work to send a file, as they don’t have access to the binary file contents.\n\nFortunately, there is the FormData browser API. We can use it to construct the request body from the form DOM node. And conveniently, when we do so, it even sets the request’s Content-Type header to multipart/form-data – also a necessary step to transmit the binary data.\n\nconst url = new URL(form.action);\nconst formData = new FormData(form);\n\n/** @type {Parameters&lt;fetch&gt;[1]} */\nconst fetchOptions = {\n  method: form.method,\n  body: formData,\n};\n\nfetch(url, fetchOptions);\nThat’s really the bare minimum needed to upload files with JavaScript. Let’s do a little recap:\n\nAccess to the file system using a file type input.\nConstruct an HTTP request using the Fetch (or XMLHttpRequest) API.\nSet the request method to POST.\nInclude the file in the request body.\nSet the HTTP Content-Type header to multipart/form-data.\nToday we looked at a convenient way of doing that, using an HTML form element with a submit event handler, and using a FormData object in the body of the request. The current handleSumit function should look like this:\n\n/** @param {Event} event */\nfunction handleSubmit(event) {\n  const url = new URL(form.action);\n  const formData = new FormData(form);\n\n  /** @type {Parameters&lt;fetch&gt;[1]} */\n  const fetchOptions = {\n    method: form.method,\n    body: formData,\n  };\n\n  fetch(url, fetchOptions);\n\n  event.preventDefault();\n}\nUnfortunately, the current submit handler is not very reusable. Every request will include a body set to a FormData object and a “Content-Type” header set to multipart/form-data. This is too brittle. Bodies are not allowed in GET requests, and we may want to support different content types in other POST requests.\n\nHow to Make it Reusable\nWe can make our code more robust to handle GET and POST requests, and send the appropriate Content-Type header. We’ll do so by creating a URLSearchParams object in addition to the FormData, and running some logic based on whether the request method should be POST or GET. I’ll try to lay out the logic below:\n\nIs the request using a POST method?\n\n— Yes: is the form’s enctype attribute multipart/form-data?\n\n— — Yes: set the body of the request to the FormData object. The browser will automatically set the “Content-Type” header to multipart/form-data.\n\n— — No: set the body of the request to the URLSearchParams object. The browser will automatically set the “Content-Type” header to application/x-www-form-urlencoded.\n\n— No: We can assume it’s a GET request. Modify the URL to include the data as query string parameters.\n\nThe refactored solution looks like:\n\n/** @param {Event} event */\nfunction handleSubmit(event) {\n  /** @type {HTMLFormElement} */\n  const form = event.currentTarget;\n  const url = new URL(form.action);\n  const formData = new FormData(form);\n  const searchParams = new URLSearchParams(formData);\n\n  /** @type {Parameters&lt;fetch&gt;[1]} */\n  const fetchOptions = {\n    method: form.method,\n  };\n\n  if (form.method.toLowerCase() === &#039;post&#039;) {\n    if (form.enctype === &#039;multipart/form-data&#039;) {\n      fetchOptions.body = formData;\n    } else {\n      fetchOptions.body = searchParams;\n    }\n  } else {\n    url.search = searchParams;\n  }\n\n  fetch(url, fetchOptions);\n\n  event.preventDefault();\n}\nI really like this solution for a number of reasons:\n\nIt can be used for any form.\nIt relies on the underlying HTML as the declarative source of configuration.\nThe HTTP request behaves the same as with an HTML form. This follows the principle of progressive enhancement, so file upload works the same when JavaScript is working properly or when it fails.\nSo, that’s it. That’s uploading files with JavaScript.\n\nThank you so much for reading. I hope you found this useful. If you liked this article, and want to support me, the best ways to do so are to share it, sign up for my newsletter, and follow me on Twitter.\n', '2023-04-07 20:31:43', 0, 0),
(4, 7, '', 1, 'How to Upload Files with JavaScript', 'In this tutorial, I want to show you how to do the same thing with JavaScript to avoid the page refresh. That way, you can have the same functionality, but with better user experience.', 'In this tutorial, I want to show you how to do the same thing with JavaScript to avoid the page refresh. That way, you can have the same functionality, but with better user experience.', '2023-04-07 20:54:47', 0, 0),
(5, 5, '../public/uploads/blog/test/1.png', 1, 'test', 'In this tutorial, I want to show you how to do the same thing with JavaScript to avoid the page refresh. That way, you can have the same functionality, but with better user experience.', 'In this tutorial, I want to show you how to do the same thing with JavaScript to avoid the page refresh. That way, you can have the same functionality, but with better user experience.', '2023-04-07 21:02:13', 0, 0),
(6, 8, '../public/uploads/blog/Test2/6430bd7da7d39.jpg', 1, 'Test2', 'In this tutorial, I want to show you how to do the same thing with JavaScript to avoid the page refresh. That way, you can have the same functionality, but with better user experience.', 'In this tutorial, I want to show you how to do the same thing with JavaScript to avoid the page refresh. That way, you can have the same functionality, but with better user experience.', '2023-04-07 21:03:57', 0, 0);

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

CREATE TABLE `categories` (
  `category` int(11) NOT NULL,
  `title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `categories`
--

INSERT INTO `categories` (`category`, `title`) VALUES
(1, 'Environnments'),
(2, 'Assainissement &amp; Eau Potable '),
(3, 'Développement Durable'),
(4, 'Matériaux de construction'),
(5, 'Recherches Scientifiques'),
(6, 'Infrastructures '),
(7, 'Actualités d&#039;ingénierie &amp; découvertes'),
(8, 'Entretiens'),
(9, ''),
(10, '');

-- --------------------------------------------------------

--
-- Structure de la table `managers`
--

CREATE TABLE `managers` (
  `manager` int(11) NOT NULL,
  `task` int(11) NOT NULL,
  `fname` varchar(80) DEFAULT NULL,
  `lname` varchar(80) DEFAULT NULL,
  `email` varchar(80) DEFAULT NULL,
  `pswd` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `managers`
--

INSERT INTO `managers` (`manager`, `task`, `fname`, `lname`, `email`, `pswd`) VALUES
(1, 1, 'wesley', 'pierre', 'pierrechriswesley@gmail.com', '12345678\r\n');

-- --------------------------------------------------------

--
-- Structure de la table `suscribers`
--

CREATE TABLE `suscribers` (
  `suscriber` int(11) NOT NULL,
  `mail` varchar(50) DEFAULT NULL,
  `joinOn` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `suscribers`
--

INSERT INTO `suscribers` (`suscriber`, `mail`, `joinOn`) VALUES
(1, 'pierrewesley892@gmail.com', '2023-04-03 20:46:30');

-- --------------------------------------------------------

--
-- Structure de la table `tasks`
--

CREATE TABLE `tasks` (
  `task` int(11) NOT NULL,
  `task_desc` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `tasks`
--

INSERT INTO `tasks` (`task`, `task_desc`) VALUES
(1, 'admin'),
(2, 'author');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`article`),
  ADD KEY `category` (`category`),
  ADD KEY `manager` (`manager`);

--
-- Index pour la table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`category`);

--
-- Index pour la table `managers`
--
ALTER TABLE `managers`
  ADD PRIMARY KEY (`manager`),
  ADD KEY `task` (`task`);

--
-- Index pour la table `suscribers`
--
ALTER TABLE `suscribers`
  ADD PRIMARY KEY (`suscriber`);

--
-- Index pour la table `tasks`
--
ALTER TABLE `tasks`
  ADD PRIMARY KEY (`task`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `articles`
--
ALTER TABLE `articles`
  MODIFY `article` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `categories`
--
ALTER TABLE `categories`
  MODIFY `category` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `managers`
--
ALTER TABLE `managers`
  MODIFY `manager` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `suscribers`
--
ALTER TABLE `suscribers`
  MODIFY `suscriber` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `tasks`
--
ALTER TABLE `tasks`
  MODIFY `task` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `articles`
--
ALTER TABLE `articles`
  ADD CONSTRAINT `articles_ibfk_1` FOREIGN KEY (`category`) REFERENCES `categories` (`category`),
  ADD CONSTRAINT `articles_ibfk_2` FOREIGN KEY (`manager`) REFERENCES `managers` (`manager`);

--
-- Contraintes pour la table `managers`
--
ALTER TABLE `managers`
  ADD CONSTRAINT `managers_ibfk_1` FOREIGN KEY (`task`) REFERENCES `tasks` (`task`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
