<?php
declare(strict_types = 1);

namespace Unixslayer;

class ReversePolishNotationCalculator implements ReversePolishNotationCalculatorInterface
{
    /**
     * {@inheritDoc}
     */
    public function calculate(string $expression): float
    {
        if ($expression === '') {
            return .0;
        }

        $expressionStack = explode(' ', $expression);
        if (count($expressionStack) === 1) {
            return (float)$expressionStack[0];
        }

        $stack = [];
        $result = .0;
        foreach ($expressionStack as $element) {
            if (is_numeric($element)) {
                $stack[] = $element;
            } else {
                $result = $this->calculateOperator(array_slice($stack, -2), $element);
                array_pop($stack);
                array_pop($stack);
                $stack[] = $result;
            }
        }

        return $result;
    }

    /**
     * @param array $stack
     * @param string $operator
     *
     * @return float
     */
    private function calculateOperator(array $stack, string $operator): float
    {
        switch ($operator) {
            case '+':
                return (float)bcadd((string)$stack[0], (string)$stack[1], 6);
            case '-':
                return (float)bcsub((string)$stack[0], (string)$stack[1], 6);
            case '/':
                return (float)bcdiv((string)$stack[0], (string)$stack[1], 6);
            case '*':
                return (float)bcmul((string)$stack[0], (string)$stack[1], 6);
        }
    }
}
