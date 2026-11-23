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
    @elseif($board == 'service-visitor')
        <x-servicevisitor />
    @elseif($board == 'promote-your-business')
        <x-promoteyourbrand />
    @endif
</main>