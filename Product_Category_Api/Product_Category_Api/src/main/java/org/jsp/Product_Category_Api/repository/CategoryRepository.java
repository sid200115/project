package org.jsp.Product_Category_Api.repository;

import org.jsp.Product_Category_Api.dto.Category;
import org.springframework.data.jpa.repository.JpaRepository;

public interface CategoryRepository extends JpaRepository<Category, Integer> {
	

}
