<?php

namespace Tests\Spinen\BrowserFilter\Stubs;

use Closure;
use Illuminate\Http\Request;
use Spinen\BrowserFilter\Filter;

/**
 * Class FilterStub
 *
 * @package Tests\Spinen\BrowserFilter\Route\Stubs
 */
class FilterStub extends Filter
{
    /**
     * @inheritDoc
     */
    public function parseFilterString($filter_string)
    {
        $this->rules = explode(',', $filter_string);
    }

    /**
     * @inheritDoc
     */
    public function process(Request $request, Closure $next)
    {
        return "Stub";
    }

    /**
     * Method in the stub to allow you to set the filter to behave as a block filter.
     *
     * @return void
     */
    public function setFilterAsBlockFilter()
    {
        $this->block_filter = true;
    }

    /**
     * Method in the stub to allow you to set the filter to behave as an allow filter.
     *
     * @return void
     */
    public function setFilterAsAllowFilter()
    {
        $this->block_filter = false;
    }

    /**
     * Method in the stub to allow you to set the redirect_route for testing.
     *
     * @param string $redirect_route Set the name of the route to redirect
     *
     * @return void
     */
    public function setRedirectRouteForTest($redirect_route)
    {
        $this->redirect_route = $redirect_route;
    }

    /**
     * Method in the stub to allow you to set the rules for testing.
     *
     * @param array $rules Array of rules
     *
     * @return void
     */
    public function setRulesForTest(array $rules)
    {
        $this->rules = $rules;
    }
}
