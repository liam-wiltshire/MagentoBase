<?php
/**
 * @category   Php4u
 * @package    Php4u_BlastLuceneSearch
 * @author     Marcin Szterling <marcin@php4u.co.uk>
 * @copyright  Php4u Marcin Szterling (c) 2015
 * @license http://php4u.co.uk/licence/
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 * Any form of ditribution, sell, transfer forbidden see licence above
 */
    $installer = $this;
    $installer->startSetup();
    $installer->addAttribute('catalog_product','lucene_product_position', $this->getLucenePositionAttribute());
    $installer->updateAttribute('catalog_product','lucene_product_position', 'is_configurable', false);
    $installer->updateAttribute('catalog_product','lucene_indexed', 'is_configurable', false);
    $installer->updateAttribute('catalog_product','lucene_product_position', 'is_searchable', true);
    $installer->updateAttribute('catalog_product','lucene_indexed', 'is_searchable', false);
    $installer->updateAttribute('catalog_product','lucene_product_position', 'used_for_sort_by', false);
    $installer->updateAttribute('catalog_product','lucene_indexed', 'used_for_sort_by', false);
    $installer->updateAttribute('catalog_product','lucene_product_position', 'is_visible_in_advanced_search', false);
    $installer->updateAttribute('catalog_product','lucene_indexed', 'is_visible_in_advanced_search', false);
    $installer->updateAttribute('catalog_product','lucene_product_position', 'is_used_for_promo_rules', false);
    $installer->updateAttribute('catalog_product','lucene_indexed', 'is_used_for_promo_rules', false);
    $installer->endSetup();
