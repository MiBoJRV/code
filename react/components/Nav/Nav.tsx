import React from 'react';
import cn from 'classnames';
import { MenuItem } from '../MenuItem';
import { NAV_LINKS_CONFIG } from './constants';

type NavProps = {
  expandedMenuItem: string | number | null;
  setExpandedMenuItem: React.Dispatch<
    React.SetStateAction<string | number | null>
  >;
  className?: string;
};

export const Nav: React.FC<NavProps> = ({
  expandedMenuItem,
  setExpandedMenuItem,
  className,
}): JSX.Element => {
  const onMenuItemClick = (menuItemId: string | number | null) => {
    if (menuItemId === expandedMenuItem) {
      setExpandedMenuItem(null);
    } else {
      setExpandedMenuItem(menuItemId);
    }
  };

  const getIsExpandedMenuItem = (menuItemId: string | number): boolean =>
    menuItemId === expandedMenuItem;

  return (
    <nav className={cn(className)}>
      <div className="w-100% lg:w-[80%] xl:w-[60%] lg:ml-auto">
        <ul className="lg:flex lg:justify-between lg:items-center">
          {NAV_LINKS_CONFIG.map((link) => (
            <MenuItem
              key={link.id}
              isExpanded={getIsExpandedMenuItem(link.id)}
              onMenuItemClick={onMenuItemClick}
              {...link}
            />
          ))}
        </ul>
      </div>
    </nav>
  );
};
