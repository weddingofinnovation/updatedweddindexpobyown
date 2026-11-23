<main>
    @if($board == 'wedding-business-tour')
         <x-businesstour />
    @elseif($board == 'wedding-roadshow')
        <x-businesstour />
    @elseif($board == 'wedding-planner-community')
        <x-weddingcommunity />
    @elseif($board == 'tickets-registration')
        <x-tickets />
    @elseif($board == 'plan-your-visit')
        <x-planyourtrip />
    @elseif($board == 'how-to-get-there')
        <x-howtogetthere />
    @endif
</main>