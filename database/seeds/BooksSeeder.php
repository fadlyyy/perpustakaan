<?php

use Illuminate\Database\Seeder;
use App\Author;
use App\Book;

class BooksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Sample penulis
        $author1 = Author::create(['name'=>'Fadly']);
        $author2 = Author::create(['name'=>'Rifai']);
        $author3 = Author::create(['name'=>'Pai']);

        // Sample buku
        $book1 = Book::create(['title'=>'Kupinang engkau dengan bismillah', 'amount'=>3, 'author_id'=>$author1->id]);
        $book2 = Book::create(['title'=>'Kupinang engkau dengan hamdalah', 'amount'=>4, 'author_id'=>$author2->id]);
        $book3 = Book::create(['title'=>'Kupinang engkau dengan istighfar', 'amount'=>3, 'author_id'=>$author3->id]);
    }
}
