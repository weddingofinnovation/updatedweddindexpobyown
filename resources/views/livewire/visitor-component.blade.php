<main>
    @if($board == 'wedding-business-tour')
         <x-businesstour-component />
    @elseif($board == 'wedding-roadshow')
        <x-businesstour-component />
    @endif
</main>