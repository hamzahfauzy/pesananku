@if ($activeTheme == 'fastfood')
    @includeIf('user-front.fastfood.partials.footer')
@elseif($activeTheme == 'bakery')
    @includeIf('user-front.bakery.partials.footer')
@elseif($activeTheme == 'pizza')
    @includeIf('user-front.pizza.partials.footer')
@elseif($activeTheme == 'coffee')
    @includeIf('user-front.coffee.partials.footer')
@elseif($activeTheme == 'medicine')
    @includeIf('user-front.medicine.partials.footer')
@elseif($activeTheme == 'grocery')
    @includeIf('user-front.grocery.partials.footer')
@elseif($activeTheme == 'beverage')
    @includeIf('user-front.beverage.partials.footer')
@endif
