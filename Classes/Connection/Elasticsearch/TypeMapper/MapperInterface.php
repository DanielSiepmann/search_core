<?php
namespace Leonmrni\SearchCore\Connection\Elasticsearch\TypeMapper;

/*
 * Copyright (C) 2016  Daniel Siepmann <coding@daniel-siepmann.de>
 *
 * This program is free software; you can redistribute it and/or
 * modify it under the terms of the GNU General Public License
 * as published by the Free Software Foundation; either version 2
 * of the License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA
 * 02110-1301, USA.
 */

interface MapperInterface
{
    /**
     * @param string $typeName
     */
    public function __construct($typeName);

    /**
     * Returns ready to use mapping for \Elastica\Type\Mapping->setProperties
     *
     * @return array
     */
    public function getPropertyMapping();

    /**
     * Applies the necessary mapping to the raw array that is used to build the
     * document afterwards.
     *
     * The document should be received as reference.
     *
     * @param array &$document
     */
    public function applyMappingToDocument(array &$document);
}