<h1>{{$heading}}</h1>

@unless (count($listings) == 0)
    
<ul>

@foreach($listings as $listing)
        <li>
            <h2><a href="listings/{{$listing['id']}}">{{$listing['title']}}</a></h2>
            <p>{{$listing['description']}}</p>
        </li>
@endforeach
</ul>

@else
<p>There are no listings to display</p>
@endunless