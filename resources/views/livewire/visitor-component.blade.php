<main>
    @if($board == 'wedding-business-tour')
         <x-businesstour />
    @elseif($board == 'wedding-roadshow')
        <x-businesstour />
    @elseif($board == 'wedding-planner-community')
        <x-weddingcommunity />
    @elseif($board == 'tickets')
        <x-tickets />
    @endif
</main>