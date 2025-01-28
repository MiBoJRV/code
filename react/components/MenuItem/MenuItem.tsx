import React from 'react';
import cn from 'classnames';
import { useMedia } from 'src/hooks';
import { MenuItemType } from 'src/types';
import { MenuMain } from 'src/ui-kit/typography';
import { MenuArrowIcon } from 'src/assets/icons';
import { MenuSubItemsList } from 'src/components';

type MenuItemProps = {
  isExpanded?: boolean | void;
  className?: string;
  onMenuItemClick: (menuItemId: string | number | null) => void;
} & MenuItemType;

export const MenuItem: React.FC<MenuItemProps> = ({
  id,
  title,
  href,
  subMenuItems,
  isExpanded = false,
  isExpandable = false,
  onMenuItemClick,
  className,
}): JSX.Element => {
  const { isMediaLg } = useMedia();
  const isExpandedLg = isExpandable && isMediaLg;

  const handleMouseMove = (value: null | string | number) => () => {
    if (isExpandedLg) {
      onMenuItemClick(value);
    }
  };

  const handleMouseClick = (value: null | string | number) => () => {
    if (isExpandable) {
      if (!isMediaLg) {
        onMenuItemClick(value);
      }
    }
  };

  return (
    <li
      className={`${
        isExpanded
          ? 'border-transparent first-of-type[+ li]:border-transparent  bg-blue-warm-opacity-02'
          : 'border-blue-warm bg-transparent'
      } border-t-[1px] px-[20px] lg:cursor-pointer lg:border-t-0 lg:px-0 lg:bg-transparent`}
      onMouseLeave={handleMouseMove(null)}
    >
      <a
        className={cn(
          `group block w-100% lg:hover:text-blue-logo lg:transition-all lg:max-w-fit ${
            isExpanded && isMediaLg ? 'text-blue-logo' : 'text-grey'
          }`,
          className
        )}
        href={href}
        onClick={handleMouseClick(id)}
        onMouseEnter={handleMouseMove(id)}
      >
        <div className="h-20 flex items-center justify-between py-1 lg:border-b-2 lg:border-transparent lg:hover:border-blue-logo lg:h-auto lg:transition-all lg:justify-start">
          <MenuMain title={title} />
          {isExpandable && (
            <div
              className={`${
                isExpanded ? 'rotate-180' : 'rotate-0'
              } lg:ml-2.5 lg:group-hover:rotate-180 lg:transition-all`}
            >
              <MenuArrowIcon
                strokeColor="currentColor"
                className="w-6 h-3 stroke-[3px] lg:w-[10px] lg:h-2 lg:stroke-[6px]"
              />
            </div>
          )}
        </div>
      </a>
      {isExpanded && subMenuItems && (
        <MenuSubItemsList subMenuItems={subMenuItems} />
      )}
    </li>
  );
};
