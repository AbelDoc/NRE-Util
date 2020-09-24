
    /**
     * @file NRE_Main.cpp
     * @brief Test of Core's API
     * @author Louis ABEL
     * @date 13/05/2019
     * @copyright CC-BY-NC-SA
     */
    
    #include <iostream>
    #include <vector>
    
    #include "Header/NRE_Core.hpp"

    using namespace NRE;
    
    int main(int, char**) {
        
        std::cout << Concept::SameAs<Core::DifferenceType, typename Memory::PointerTraits<int*>::DifferenceType> << std::endl;
        std::cout << Concept::SameAs<int, typename Memory::PointerTraits<int*>::ValueType> << std::endl;
        
        std::allocator<int> alloc;
        auto mem = Memory::AllocatorTraits<std::allocator<int>>::allocate(alloc, 10);
        Memory::AllocatorTraits<std::allocator<int>>::deallocate(alloc, mem, 10);
        
        return 0;
    }
