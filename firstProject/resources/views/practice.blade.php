@foreach($books as $book)
{{ $book['title'] }} 
{{ $book['author'] }} 
{{ $book['price'] }}
<br>
@endforeach