<?php
/**
 * Summon support functions.
 *
 * PHP version 5
 *
 * Copyright (C) Villanova University 2012.
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License version 2,
 * as published by the Free Software Foundation.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
 *
 * @category VuFind2
 * @package  Support_Classes
 * @author   Demian Katz <demian.katz@villanova.edu>
 * @license  http://opensource.org/licenses/gpl-2.0.php GNU General Public License
 * @link     http://www.vufind.org  Main Page
 */
namespace VuFind;

/**
 * Summon support functions.
 *
 * @category VuFind2
 * @package  Support_Classes
 * @author   Demian Katz <demian.katz@villanova.edu>
 * @license  http://opensource.org/licenses/gpl-2.0.php GNU General Public License
 * @link     http://www.vufind.org  Main Page
 */
class Summon
{
    /**
     * Export support function to convert Summon format to EndNote format.
     *
     * @param string $format Summon format
     *
     * @return string
     */
    public static function getEndnoteFormat($format)
    {
        switch ($format) {
        case 'Journal Article':
            return 'Journal Article';
        case 'Book':
            return 'Book';
        case 'Book Chapter':
            return 'Book Section';
        case 'Conference Proceeding':
            return 'Conference Paper';
        case 'Dissertation':
            return 'Thesis';
        default:
            return 'Generic';
        }
    }

    /**
     * Export support function to convert Summon format to RefWorks format.
     *
     * @param string $format Summon format
     *
     * @return string
     */
    public static function getRefWorksFormat($format)
    {
        switch ($format) {
        case 'Book Chapter':
            return 'Book, Section';
        case 'Book':
            return 'Book, Whole';
        case 'eBook':
            return 'Book, Whole';
        case 'Computer File':
            return 'Computer Program';
        case 'Conference Proceeding':
            return 'Conference Proceedings';
        case 'Dissertation':
            return 'Dissertation/Thesis';
        case 'Journal Article':
            return 'Journal Article';
        case 'Journal':
            return 'Journal, Electronic';
        case 'Trade Publication Article':
            return 'Magazine Article';
        case 'Map':
            return 'Map';
        case 'Music Score':
            return 'Music Score';
        case 'Newspaper Article':
            return 'Newspaper Article';
        case 'Report':
            return 'Report';
        case 'Audio Recording':
            return 'Sound Recording';
        case 'Video Recording':
            return 'Video/ DVD';
        case 'Web Resource':
            return 'Web Page';
        default:
            return 'Generic';
        }
    }
}