pragma solidity ^0.8.9;

import '../node_modules/@openzeppelin/contracts/token/ERC20/ERC20.sol';

contract MyToken is ERC20 {
    address public admin;
    constructor() ERC20('My Token', 'MTM') {
        _mint(msg.sender, 10000*10**18);
        admin = msg.sender;
    }

    function mint(address to, uint amount) external {
        require(msg.sender == admin, 'only amdin');
        _mint(to, amount);        
    }

    function burn(uint amount) external {
        _burn(msg.sender, amount);
    }
}