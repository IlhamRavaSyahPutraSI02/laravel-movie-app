<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    use HasFactory;

    protected $genres = [
        [
            'id' => 1,
            'nomer' => '1',
            'poster' => 'movie-01.jpg' ,
            'name' => 'Jojo Bizarre Adventure',
            'description' => 'Jojo`s Bizarre Adventure is a story about the Joestar family, who are possessed with intense psychic strength.',
        ],
        [
            'id' => 2,
            'nomer' => '2',
            'poster' => 'movie-02.jpg',
            'name' => 'Noragami',
            'description' => 'Noragami is an anime series that follows a poor deity named Yato, who desires to become a famous god.',
        ],
        [
            'id' => 3,
            'nomer' => '3',
            'poster' => 'movie-03.jpg' ,
            'name' => 'Wind Breaker',
            'description' => 'Haruka Sakura wants nothing to do with weaklings—he is only interested in the strongest of the strong.',
        ],
        [
            'id' => 4,
            'nomer' => '4',
            'poster' => 'movie-05.jpg' ,
            'name' => 'Naruto Shippudden',
            'description' => 'Naruto: Shippuden is the sequel to the popular anime series, Naruto. It follows the continuing adventures of Naruto Uzumaki, a young ninja who dreams of becoming the Hokage, the leader of his village.',
        ],
        [
            'id' => 5,
            'nomer' => '5',
            'poster' => 'movie-06.jpg' ,
            'name' => 'One Piece',
            'description' => 'One Piece is a Japanese manga series written and illustrated by Eiichiro Oda. It has been serialized in Shueisha s shōnen manga magazine Weekly Shōnen Jump since July 22, 1997, and has been collected into 105 tankōbon volumes as of March 2023. The story follows the adventures of Monkey D. Luffy, a young boy who dreams of becoming the King of the Pirates. Luffy sets sail on the Grand Line with his crew of Straw Hat Pirates in search of the legendary treasure One Piece left by the previous Pirate King, Gol D. Roger.',
        ],
    ];

    public function getAllGenres()
    {
        return $this->genres;
    }
}
