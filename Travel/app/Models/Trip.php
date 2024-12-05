<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use MongoDB\Client;

class Trip extends Model
{
    protected static $client;

    // Fungsi untuk koneksi ke MongoDB
    public static function connect()
    {
        if (!self::$client) {
            self::$client = new Client(env('MONGODB_URI', 'mongodb://127.0.0.1:27017'));
        }
        return self::$client->selectDatabase(env('MONGO_DB_DATABASE', 'PraUAS'))->selectCollection('trips');
    }

    // Fungsi untuk mendapatkan semua trip
    public static function getAllTrips()
    {
        $collection = self::connect();
        return iterator_to_array($collection->find([]));
    }

    // Fungsi untuk membuat trip baru
    public static function createTrip(array $data)
    {
        $collection = self::connect();
        return $collection->insertOne($data);
    }

    // Fungsi untuk mencari trip berdasarkan ID
    public static function findTripById($id)
    {
        $collection = self::connect();
        try {
            return $collection->findOne(['_id' => new \MongoDB\BSON\ObjectId($id)]);
        } catch (\Exception $e) {
            return null;
        }
    }

    // Fungsi untuk mengupdate trip
    public static function updateTrip($id, array $data)
    {
        $collection = self::connect();
        try {
            return $collection->updateOne(
                ['_id' => new \MongoDB\BSON\ObjectId($id)],
                ['$set' => $data]
            );
        } catch (\Exception $e) {
            return null;
        }
    }

    // Fungsi untuk menghapus trip
    public static function deleteTrip($id)
    {
        $collection = self::connect();
        try {
            return $collection->deleteOne(['_id' => new \MongoDB\BSON\ObjectId($id)]);
        } catch (\Exception $e) {
            return null;
        }
    }
}
