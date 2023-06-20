<?php

namespace App\Http\Livewire;

use App\Models\Book;
use Livewire\Component;

class BookShow extends Component
{
    public $user;

    public function mount()
    {
        $this->user = auth()->user();
    }
    public function render()
    {
        $books = Book::paginate(4);
        return view('livewire.book-show', [
            'books' => $books,
            'user' => $this->user,
        ]);
    }
}
