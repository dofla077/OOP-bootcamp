<?php

/**interface Animal {
    public function communicate();
}

class Dog implements Animal {
    public function communicate()
    {
        return 'bark';
    }
}

class Cat implements Animal {
    public function communicate()
    {
        return 'meow';
    }
}**/

/**interface Logger {
    public function execute($message);
}

class LogToFile implements Logger {
    public function execute($message)
    {
        var_dump('Log the message to a file: ' . $message);
    }
}

class LogToDatabase implements Logger {
    public function execute($message)
    {
        var_dump('Log the message to a database: ' . $message);
    }
}

class UsersController {

    protected $logger;
    public function __construct(Logger $logger)
    {
        $this->logger = $logger;
    }

    public function show()
    {
        $user = 'JohnDoe';
        $this->logger->execute($user);
    }
}

$controller = new UsersController(new LogToDatabase());
$controller->show();
**/


/**interface CasteToJson {
    public function toJson();
}

class User implements CasteToJson {
    public function toJson()
    {
        // TODO: Implement toJson() method.
    }
}

class Collection implements CasteToJson {
    public function toJson()
    {
        // TODO: Implement toJson() method.
    }
}**/

/**interface Repository {
    public function save($data);
}

class MongoRepository implements Repository {
    public function save($data) {

    }
}

class FileRepository implements Repository {
    public function save($data) {

    }
}**/

interface CanBeFiltered {
    public function filter();
}

class Favorited implements CanBeFiltered {
    public function filter()
    {
        // TODO: Implement filter() method.
    }
}

class Unwatched implements CanBeFiltered {
    public function filter()
    {
        // TODO: Implement filter() method.
    }
}

class Difficulty implements CanBeFiltered {
    public function filter()
    {
        // TODO: Implement filter() method.
    }
}