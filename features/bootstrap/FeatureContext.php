<?php

use Behat\Behat\Tester\Exception\PendingException;
use Behat\Behat\Context\Context;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;

/**
 * Defines application features from the specific context.
 */
class FeatureContext implements Context
{
    private $bookbeat;

    /**
     * Initializes context.
     *
     * Every scenario gets its own context instance.
     * You can also pass arbitrary arguments to the
     * context constructor through behat.yml.
     */
    public function __construct()
    {
        $this->bookbeat = new BookBeat();
    }

    /**
     * @Given I am online
     */
    public function iAmOnline()
    {
        throw new PendingException();
    }

    /**
     * @Given I search for tools that can help my book sales
     */
    public function iSearchForToolsThatCanHelpMyBookSales()
    {
        throw new PendingException();
    }

    /**
     * @When I google search for bookbeat
     */
    public function iGoogleSearchForBookbeat()
    {
        throw new PendingException();
    }

    /**
     * @When I view the page
     */
    public function iViewThePage()
    {
        throw new PendingException();
    }

    /**
     * @Then I should have the bookbeat website describing its app
     */
    public function iShouldHaveTheBookbeatWebsiteDescribingItsApp()
    {
        throw new PendingException();
    }

    /**
     * @Given there is a :arg1, which is listed on Amazon
     */
    public function thereIsAWhichIsListedOnAmazon($arg1)
    {
        $this->bookbeat->setBookTitle($arg1);
    }

    /**
     * @When I view the BookBeat page
     */
    public function iViewTheBookbeatPage()
    {
        $this->bookbeat->viewBookbeatPage();
    }

    /**
     * @Then I should see :arg1
     */
    public function iShouldSee($arg1)
    {
        PHPUnit_Framework_Assert::assertSame(
            $arg1,
            $this->bookbeat->getBookTitle()
        );
    }

    /**
     * @Then I should see the Amazon sales rank of greater than :arg1
     */
    public function iShouldSeeTheAmazonSalesRankOfGreaterThan($arg1)
    {
        PHPUnit_Framework_Assert::assertGreaterThan(
            $arg1,
            $this->bookbeat->getSalesRank()
        );
    }

    /**
     * @Then I should see the number of reviews of :arg1 or greater
     */
    public function iShouldSeeTheNumberOfReviewsOfOrGreater($arg1)
    {
        PHPUnit_Framework_Assert::assertGreaterThanOrEqual(
            $arg1,
            $this->bookbeat->getNumReviews()
        );
    }

    /**
     * @Then I should see the average rating of greater or equal than :arg1 and less or equal :arg2
     */
    public function iShouldSeeTheAverageRatingOfGreaterOrEqualThanAndLessOrEqual($arg1, $arg2)
    {
        PHPUnit_Framework_Assert::assertGreaterThanOrEqual(
            $arg1,
            $this->bookbeat->getAvgRating()
        );
        PHPUnit_Framework_Assert::assertLessThanOrEqual(
            $arg2,
            $this->bookbeat->getAvgRating()
        );
    }

    /**
     * @Given there is a :arg1 which is listed on Amazon
     */
    public function thereIsAWhichIsListedOnAmazon2($arg1)
    {
        $this->bookbeat->setBookTitle($arg1);
    }
}
