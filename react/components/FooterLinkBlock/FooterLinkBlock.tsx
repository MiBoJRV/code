import React from 'react';
import cn from 'classnames';
import { NavLinkType } from 'src/types';
import { TextLink, FooterLinkText } from 'src/ui-kit';

type FooterLinkBlockProps = {
  footerLinks: NavLinkType[];
  title: string | undefined;
  className?: string;
};
export const FooterLinkBlock: React.FC<FooterLinkBlockProps> = ({
  footerLinks,
  title,
  className,
}): JSX.Element => (
  <div className={cn(``, className)}>
    <div>
      <FooterLinkText
        className="text-title-link mb-4 lg:text-title-link-lg lg:mb-8"
        title={title}
      />
    </div>
    <div className="lg:mb-9">
      {footerLinks.map(({ id, title, href, links }) => (
        <div key={id}>
          <div className="mb-1.5 w-fit lg:mb-3">
            <a href={href}>
              <FooterLinkText
                className="text-foot-link hover:text-blue-light lg:text-sub-link-lg"
                title={title}
              />
            </a>
          </div>
          <ul>
            {links?.map((link) => (
              <li key={id} className="group">
                <TextLink
                  className="text-link-box-mob leading-7 text-grey hover:text-blue-light group-hover:after:border-blue-light"
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
