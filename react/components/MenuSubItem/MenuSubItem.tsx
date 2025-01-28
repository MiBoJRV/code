import React from 'react';
import cn from 'classnames';
import { NavLinkType } from 'src/types';
import { Heading6, Text4, LinkWithIcon, FooterLink } from 'src/ui-kit';

type MenuSubItemProps = {
  className?: string;
} & NavLinkType;

export const MenuSubItem: React.FC<MenuSubItemProps> = ({
  heading,
  href,
  title,
  description,
  links,
  icon,
  className,
}): JSX.Element => (
  <li className={cn('pl-11 pb-8 pt-4 lg:pt-10', className)}>
    <Heading6 title={heading} className="opacity-70 lg:pb-3" />
    <LinkWithIcon {...{ href, title, icon }} className="-translate-x-11" />
    <Text4
      title={description}
      fontSize="text-link-box-mob"
      fontSizeXs="text-link-box-mob"
      fontSizeLg="text-link-box-mob"
      className="max-w-[200px] opacity-70 lg:py-2"
    />
    {links && (
      <ul className="mt-4">
        {links.map((sublink) => (
          <li key={sublink.title} className="mb-1 last:mb-0">
            <FooterLink
              fontSize="text-base lg:text-foot-link-lg"
              {...sublink}
            />
          </li>
        ))}
      </ul>
    )}
  </li>
);
