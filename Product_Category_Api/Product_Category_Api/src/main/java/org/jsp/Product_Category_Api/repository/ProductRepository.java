package org.jsp.Product_Category_Api.repository;

import org.jsp.Product_Category_Api.dto.Product;
import org.springframework.data.jpa.repository.JpaRepository;

public interface ProductRepository extends JpaRepository<Product, Integer> {

}
