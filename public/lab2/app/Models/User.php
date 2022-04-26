<?php

class User extends Model
{
    protected $table = 'users';

    public function getDbh()
    {
        return self::$dbh;
    }

    public function create(array $array): int
    {
        // Hash password -------------------------
        $hash = password_hash($array['password'], PASSWORD_DEFAULT);

        $query = "INSERT INTO {$this->table}
                  (
                      first_name, 
                      last_name,
                      street,
                      city,
                      postal_code,
                      province,
                      country,
                      phone,
                      email,
                      password,
                      subscribe_to_newsletter
                   )
                   VALUES
                   (
                      :first_name, 
                      :last_name,
                      :street,
                      :city,
                      :postal_code,
                      :province,
                      :country,
                      :phone,
                      :email,
                      :password,
                      :subscribe_to_newsletter
                   )";

        $stmt = self::$dbh->prepare($query);

        $stmt->bindValue(':first_name', $array['first_name']);
        $stmt->bindValue(':last_name', $array['last_name']);
        $stmt->bindValue(':street', $array['street']);
        $stmt->bindValue(':city', $array['city']);
        $stmt->bindValue(':postal_code', $array['postal_code']);
        $stmt->bindValue(':province', $array['province']);
        $stmt->bindValue(':country', $array['country']);
        $stmt->bindValue(':phone', $array['phone']);
        $stmt->bindValue(':email', $array['email']);
        $stmt->bindValue(':password', $hash);
        $array['subscribe_to_newsletter'] = $array['subscribe_to_newsletter'] ?? 0;
        $stmt->bindValue(':subscribe_to_newsletter', $array['subscribe_to_newsletter']);

        $stmt->execute();

        $id = self::$dbh->lastInsertId();

        return $id;
    }

    public function delete(int $id)
    {
        $query = "UPDATE {$this->table}
                    SET
                    deleted = 1
                    WHERE
                    id = :id";

        $stmt = self::$dbh->prepare($query);

        $stmt->bindValue(':id', $id);

        $stmt->execute();
    }
}
