<?php

namespace App\Http\Livewire;

use App\Models\Book;
use Livewire\Component;

class BookShow extends Component
{
    public function render()
    {
        $books = Book::paginate(4);
        return view('livewire.book-show', compact('books'));
    }
}
