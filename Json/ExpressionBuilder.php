<?php

declare(strict_types=1);

namespace Doctorx32\SyliusGridJsonDriverBundle\Json;


use Sylius\Component\Grid\Data\ExpressionBuilderInterface;
use Symfony\Component\Intl\Exception\NotImplementedException;

final class ExpressionBuilder implements ExpressionBuilderInterface
{
    public function andX(...$expressions) {
        throw new NotImplementedException("not impl");
    }

    public function orX(...$expressions) {
        throw new NotImplementedException("not impl");
    }

    public function comparison(string $field, string $operator, $value) {
        throw new NotImplementedException("not impl");
    }

    public function equals(string $field, $value) {
        throw new NotImplementedException("not impl");
    }

    public function notEquals(string $field, $value) {
        throw new NotImplementedException("not impl");
    }

    public function lessThan(string $field, $value) {
        throw new NotImplementedException("not impl");
    }

    public function lessThanOrEqual(string $field, $value) {
        throw new NotImplementedException("not impl");
    }

    public function greaterThan(string $field, $value) {
        throw new NotImplementedException("not impl");
    }

    public function greaterThanOrEqual(string $field, $value) {
        throw new NotImplementedException("not impl");
    }

    public function in(string $field, array $values) {
        throw new NotImplementedException("not impl");
    }

    public function notIn(string $field, array $values) {
        throw new NotImplementedException("not impl");
    }

    public function isNull(string $field) {
        throw new NotImplementedException("not impl");
    }

    public function isNotNull(string $field) {
        throw new NotImplementedException("not impl");
    }

    public function like(string $field, string $pattern) {
        # filtering doesnt work with not escaped ][ symbols
        return "criteria%5B" . $field . "%5D%5Btype%5D=contains&criteria%5B" . $field . "%5D%5Bvalue%5D=". $pattern;
    }

    public function notLike(string $field, string $pattern) {
        throw new NotImplementedException("not impl");
    }

    public function orderBy(string $field, string $direction) {
        throw new NotImplementedException("not impl");
    }

    public function addOrderBy(string $field, string $direction) {
        throw new NotImplementedException("not impl");
    }

}