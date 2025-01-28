import React from 'react';
import cn from 'classnames';
import { NavLinkType } from 'src/types';
import { FooterLink, FooterLinkText } from 'src/ui-kit';

type WhatWeDoProps = {
  className?: string;
  footerLinks: NavLinkType[];
};
export const WhatWeDo: React.FC<WhatWeDoProps> = ({
  className,
  footerLinks,
}): JSX.Element => (
  <div className={cn(``, className)}>
    <div>
      <FooterLinkText
        className="text-title-link mb-6 lg:text-title-link-lg lg:mb-9"
        title="What we do"
      />
    </div>
    <div className="grid lg:gap-x-5 lg:grid-cols-2-1">
      {footerLinks.map(({ id, title, href, links }) => (
        <div key={id} className="mb-10 last-of-type:mb-0 lg:mb-14">
          <div className="mb-1.5 lg:mb-3">
            <a href={href}>
              <FooterLinkText
                className="text-foot-link hover:text-blue-light lg:text-menu "
                title={title}
              />
            </a>
          </div>
          <ul>
            {links?.map((link) => (
              <li key={link.id} className="group w-fit">
                <FooterLink
                  className="text-x4 leading-6 text-grey xs:after:bottom-[5px] lg:text-foot-link-lg"
                  {...link}
                />
              </li>
            ))}
          </ul>
        </div>
      ))}
    </div>
  </div>
);
