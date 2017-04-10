<ul>
    @foreach($departments as $department)
        <li>
            <a href="{{ route('departments.show', ['id' => $department->id]) }}">
                {{ $department->name }}
            </a>
        </li>
    @endforeach
</ul>
