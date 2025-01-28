import React from 'react';
import { NavLinkType } from 'src/types';
import { MenuSubItem } from 'src/components';

type MenuSubItemsListProps = {
  subMenuItems?: NavLinkType[];
};

export const MenuSubItemsList: React.FC<MenuSubItemsListProps> = ({
  subMenuItems,
}): JSX.Element => (
  <div className="lg:absolute lg:left-1/2 lg:-translate-x-1/2 lg:w-full lg:px-[30px] xl:px-[70px] lg:pb-4 lg:pt-8 lg:bg-background-opacity-096  lg:shadow-menu lg:flex lg:justify-center lg:items-center">
    <ul className="sm:grid grid-cols-2 lg:w-full lg:max-w-screen-1xl lg:flex lg:justify-between lg:border-t-[1px] lg:border-blue-warm">
      {subMenuItems?.map((subMenuItem) => (
        <MenuSubItem key={subMenuItem.id} {...subMenuItem} />
      ))}
    </ul>
  </div>
);
