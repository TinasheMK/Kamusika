// const ConvertLib = artifacts.require("ConvertLib");
// const MetaCoin = artifacts.require("MetaCoin");
// const Context = artifacts.require("Context");
// const ERC20 = artifacts.require("ERC20");
// const IERC20 = artifacts.require("IERC20");
// const IERC20Metadata = artifacts.require("IERC20Metadata");
const MyToken = artifacts.require("MyToken");

module.exports = function(deployer) {
  // deployer.deploy(ConvertLib);
  // deployer.link(ConvertLib, MetaCoin);
  // deployer.deploy(Context);
  // deployer.deploy(ERC20);
  // deployer.deploy(IERC20);
  // deployer.deploy(IERC20Metadata);
  deployer.deploy(MyToken);
};
