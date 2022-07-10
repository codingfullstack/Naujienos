@extends('Layouts.layout')
@section('content')
    <table class="w-1/2 mx-auto">
        <thead>
            <tr>
                <th>Link</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($posts as $item)
                <tr class="border-2 border-solid border-black">
                    <td class="font-bold border-x-2 border-black p-2" >
                        <a class="hover:text-black text-black hover:no-underline" href="{{ route('posts.show', [$item->id]) }}">More</a></td>
                    <td class=" border-x-2 border-black p-2><a href="{{ route('posts.edit', $item) }}">
                        <a href="{{ route('posts.edit', $item) }}">
                            <button
                                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                                type="submit">
                                Edit
                            </button>

                        </a></td>
                    <td><form method="POST" action="{{ route('posts.destroy', $item) }}">
                        @csrf
                        @method('DELETE')
                        <button type="submit"
                            class=" inline-block px-6 py-2.5 bg-red-600 text-black-500 font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-red-700 hover:shadow-lg focus:bg-red-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-red-800 active:shadow-lg transition duration-150 ease-in-out">Delete
                            <i class="fas fa-trash-alt"></i>
                        </button>
                    </form></td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
