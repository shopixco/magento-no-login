<?php
/*
    Shopix_Nologin - Disable Magento customer register and login functionality.
    Copyright (C) 2013 Shopix Pty Ltd (http://www.shopix.com.au)

    This program is free software: you can redistribute it and/or modify
    it under the terms of the GNU Affero General Public License as
    published by the Free Software Foundation, either version 3 of the
    License, or (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU Affero General Public License for more details.

    You should have received a copy of the GNU Affero General Public License
    along with this program.  If not, see <http://www.gnu.org/licenses/>.
*/

class Shopix_Nologin_Model_Checkout_Type_Onepage extends Mage_Checkout_Model_Type_Onepage
{
    /**
     * Get quote checkout method
     *
     * @return string
     */
    public function getCheckoutMethod()
    {  
        if (! Mage::getStoreConfig('customer/startup/nologin'))
            return parent::getCheckoutMethod();

        $this->getQuote()->setCheckoutMethod(self::METHOD_GUEST);
        return $this->getQuote()->getCheckoutMethod();
    }
}

