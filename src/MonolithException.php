<?php namespace Monolith\ErrorHandling;

// sm: interesting idea
// come up with better name, like:
interface MonolithException {
    public function detailedExplanation();
    public function possibleSolutions();
//    public function somethingThatProvidesMoreInformationForBetterErrorDisplays(): string;
}