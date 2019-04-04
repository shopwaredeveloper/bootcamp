<?php

/*
 * This file is part of the ONGR package.
 *
 * (c) NFQ Technologies UAB <info@nfq.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace ONGR\ElasticsearchDSL\Query;

/**
 * Represents Elasticsearch "wildcard" query.
 *
 * @link https://www.elastic.co/guide/en/elasticsearch/reference/current/query-dsl-wildcard-query.html
 *
 * @deprecated Use the extended class instead. This class is left only for BC compatibility.
 */
class WildcardQuery extends \ONGR\ElasticsearchDSL\Query\TermLevel\WildcardQuery
{
}
