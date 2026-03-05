<?php
// app/Http/Controllers/FirebaseController.php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Kreait\Firebase\Contract\Firestore;

class FirebaseController extends Controller
{
    public function test(Firestore $firestore)
    {
        $collection = $firestore->collection('test');
        $collection->add([
            'name' => 'Иван',
            'created_at' => now()
        ]);

        return 'Firebase OK!';
    }
}
