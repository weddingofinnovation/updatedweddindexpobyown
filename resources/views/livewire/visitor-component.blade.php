<main>
    @if($board == 'wedding-business-tour')
         <x-businesstour />
    @elseif($board == 'wedding-roadshow')
        <x-businesstour />
    @elseif($board == 'wedding-planner-community')
        <x-weddingcommunity />
    @endif
</main>