{{--ANS 1--}}
{{-- 
@foreach($books as $book)
    <h1>Title: {{ $book['title'] }}</h1>
    <h2>Sale Price: {{ $book['price'] }}</h2>
@endforeach 
--}}

{{--ANS 2--}}
    <h1>Admin Dashboard</h1>

    <h2>Latest Books:</h2>
    <ul>
        @foreach($latestBooks as $book)
            <li>{{ $book }}</li>
        @endforeach
    </ul>

    <h2>Total Users:</h2>
    <p>{{ $totalUsers }}</p>